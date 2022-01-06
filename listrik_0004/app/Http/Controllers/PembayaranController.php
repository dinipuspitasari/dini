<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use PDF;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function index(){
        $tagihan = Tagihan::where('id_pelanggan', Auth::user()->id)->where('status', 0)->get();
        return view('pembayaran.index', compact('tagihan'));
    }

    public function details($id){
        $tagihan = Tagihan::find($id);
        $pembayaran = Pembayaran::find($id);
        return view('pembayaran.details', compact('tagihan', 'pembayaran'));
    }

    public function update(Request $request, $id){
        $tagihan = Tagihan::find($id);
        $total = ($tagihan->jumlah_meter * $tagihan->pelanggan->tarif->tarifperkwh) + 5000;

     
        if($request->bayar < $total){
            return redirect()->back()->with('message', 'Maaf, uang anda kurang');
        }
       

        $pembayaran = Pembayaran::create([
            'id_tagihan' => $request->id,
            'id_pelanggan' => Auth::user()->id,
            'tanggal_pembayaran' => Carbon::now()->format('D'),
            'bulan_bayar' => Carbon::now()->isoFormat('MMMM Y'),
            'biaya_admin' => 5000,
            'total_bayar' => $total,
        ]);

        $tagihan->update([
            'status' => 1,
        ]);

        // DB::table('tagihan')->where('', $tagihan->id)->update([
        //     'status' => 1,
        // ]);

        return redirect('/pembayaran/alert/'.$pembayaran->id);
    }

    public function alert($id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('/pembayaran/alert', compact('pembayaran'));
    }
    
    public function print($id)
    {
        $tagihan = Tagihan::all();
        $pembayaran = Pembayaran::find($id);

        $pdf = PDF::loadview('pembayaran.print', compact('pembayaran', 'tagihan'))->setPaper('A4', 'landscape');
        return $pdf->stream();
    }

   
}

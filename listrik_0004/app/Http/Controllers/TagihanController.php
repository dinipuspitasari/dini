<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagihanController extends Controller
{
    public function index()
    {
        $tagihan = Tagihan::all();
        return view('tagihan.index', compact('tagihan'));
    }

    public function details($id)
    {
        // $pelanggan = User::find($id);
        $tagihan = Tagihan::find($id);
        // $tagihan = Tagihan::all();
        return view('tagihan.details', compact('tagihan'));
    }
    
    public function create()
    {
        $tagihan = Tagihan::all();
        $pelanggan = User::all();
        return view('tagihan.create', compact('tagihan', 'pelanggan'));
    }

    public function store(Request $request)
    {
        $tagihan = Tagihan::create([
            'id_pelanggan' => $request->id_pelanggan,
            'bulan_tahun'  => $request->bulan_tahun,
            'meter_awal'  => $request->meter_awal,
            'meter_akhir'  => $request->meter_akhir,
            'jumlah_meter'  => $request->meter_akhir - $request->meter_awal,
        ]);
        return redirect('/admin/tagihan');
    }

    public function update(Request $request, $id)
    {
        $tagihan = Tagihan::find($id);
        $tagihan->update($request->all());

        $jumlah_meter = $request->meter_akhir - $request->meter_awal;

        $tagihan->update([
            'jumlah_meter' => $jumlah_meter,
            'status' => $request->status,
        ]);
        return redirect('/admin/tagihan');
    }

    public function edit($id)
    {
        $pelanggan = User::all();
        $tagihan = Tagihan::find($id);
        return view('tagihan.edit', compact('tagihan', 'pelanggan'));
    }

    public function delete(Request $request, $id)
    {
        $tagihan = Tagihan::find($id);
        $tagihan->delete();
        return redirect('/admin/tagihan');
    }
}

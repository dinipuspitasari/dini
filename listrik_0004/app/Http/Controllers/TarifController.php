<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tarif;

class TarifController extends Controller
{
    public function index()
    {
        $tarif = Tarif::all();
        return view('tarif.index', compact('tarif'));
        // return view('tarif.index');
    }

    public function create()
    {
        $tarif = Tarif::all();
        return view('tarif.create', compact('tarif'));
    }

    public function store(Request $request)
    {
        $tarif = Tarif::create($request->all());
        return redirect('/admin/tarif');
    }

    public function update(Request $request, $id)
    {
        $tarif = Tarif::find($id);
        $tarif->update($request->all());
        return redirect('/admin/tarif');
    }

    public function edit($id)
    {

        $tarif = Tarif::find($id);
        // dd($data);
        return view('tarif.edit', ['tarif' => $tarif]);
    }

    public function delete(Request $request, $id)
    {
        $tarif = Tarif::find($id);
        $tarif->delete();
        return redirect('/admin/tarif');
    }
}

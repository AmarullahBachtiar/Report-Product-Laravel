<?php

namespace App\Http\Controllers;

use App\Models\KomoditasModel;
use App\Models\ProduksiModel;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function index()
    {
        $produksi = ProduksiModel::all();
        $komoditas = KomoditasModel::pluck('nama_kom', 'id');
        $selectedID = 2;
        return view('dashboard.produksi.index', compact('produksi', 'komoditas'));
    }
    public function create()
    {
        $komoditas = KomoditasModel::all();
        return view('dashboard.produksi.create', compact('komoditas'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'kode_kom' => 'required',
            'produksi' => 'required|max:10|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
        ]);
        ProduksiModel::create([
            'tanggal'                   => $request->tanggal,
            'kode_kom'                => $request->kode_kom,
            'produksi'            => $request->produksi,
        ]);
        return redirect()->route('produksi.index');
    }
    public function edit($id)
    {
        $komoditas = komoditasModel::all();
        $produksi = ProduksiModel::with('komoditas')->find($id);
        return view('dashboard.produksi.edit', compact('produksi', 'komoditas'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'tanggal' => 'required',
                'kode_kom' => 'required',
                'produksi' => 'required'
            ]
        );
        ProduksiModel::find($id)->update($request->all());
        return redirect()->route('produksi.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\KomoditasModel;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KomoditasController extends Controller
{
    public function index()
    {
        $komoditas = KomoditasModel::all();
        return view('dashboard.komoditas.index', compact('komoditas'));
    }
    public function create()
    {
        $komoditas = KomoditasModel::all();
        return view('dashboard.komoditas.create', compact('komoditas'));
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_kom' => 'required',
            ]
        );
        $result = DB::table('komoditas')->orderBy('id', 'desc')->value('id');
        if ($result == null) {
            $no = 1;
        } else {
            $last = $result;
            $no = intval(substr($last, -3));
        }
        $NewKode = ('K') . str_pad($no, 3, 0, STR_PAD_LEFT);
        KomoditasModel::create(
            [
                'kode_kom'      => $NewKode,
                'nama_kom'     => $request->nama_kom,
            ]
        );
        return redirect()->route('komoditas.index')
            ->with('toast_success', 'data penggarap berhasil ditambahkan');
    }
    public function edit($id)
    {
        $komoditas = KomoditasModel::find($id);
        return view('dashboard.komoditas.edit', compact('komoditas'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'kode_kom' => 'required',
                'nama_kom' => 'required'
            ]
        );
        KomoditasModel::find($id)->update($request->all());
        return redirect()->route('komoditas.index');
    }
    public function destroy($id)
    {
        $komoditas = KomoditasModel::findOrFail($id);
        $komoditas->delete();

        return redirect()->route('komoditas.index')
            ->with('toast_success', 'data berhasil dihapus!!');
    }
}

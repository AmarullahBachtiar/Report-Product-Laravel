<?php

namespace App\Http\Controllers;

use App\Models\KomoditasModel;
use App\Models\LaporanModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = LaporanModel::all();
        $komoditas = KomoditasModel::pluck('nama_kom', 'id');
        $selectedID = 2;
        $data = LaporanModel::select([
            DB::raw('count(id) as count'),
            DB::raw('DATE(tanggal) as day'),
        ])->GroupBy('day')
            ->where('tanggal', '>=', Carbon::now()->subWeeks(4))
            ->get();
        return view('dashboard.laporan.index', compact('laporan', 'komoditas', 'data'));
    }
}

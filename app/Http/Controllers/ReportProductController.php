<?php

namespace App\Http\Controllers;

use App\Models\ProductBrandModel;
use App\Models\ProductModel;
use App\Models\ReportProductModel;
use App\Models\store_areaModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportProductController extends Controller
{
    public function index(Request $request)
    {

        $filter = store_areaModel::pluck('area_name', 'area_id');
        $area = store_areaModel::all();
        $brand = ProductBrandModel::all()->where('brand_id', '=', 1);
        $brand2 = ProductBrandModel::all()->where('brand_id', '=', 2);
        $data = DB::table('report_product')
            ->Join('product', 'report_product.product_id', '=', 'product.product_id')
            ->Join('product_brand', 'product.brand_id', '=', 'product_brand.brand_id')
            ->Join('store', 'report_product.store_id', '=', 'store.store_id')
            ->Join('store_area', 'store_area.area_id', '=', 'store.area_id')
            ->select('product_brand.brand_name', 'store_area.area_name', DB::raw('SUM(report_product.compliance)/count(report_product.compliance)*100 as persen'))
            ->where('product_brand.brand_id', '=', 1)
            ->groupBy('product_brand.brand_name', 'store_area.area_name')
            ->get();
        $data2 = DB::table('report_product')
            ->Join('product', 'report_product.product_id', '=', 'product.product_id')
            ->Join('product_brand', 'product.brand_id', '=', 'product_brand.brand_id')
            ->Join('store', 'report_product.store_id', '=', 'store.store_id')
            ->Join('store_area', 'store_area.area_id', '=', 'store.area_id')
            ->select('product_brand.brand_name', 'store_area.area_name', DB::raw('SUM(report_product.compliance)/count(report_product.compliance)*100 as persen'))
            ->where('product_brand.brand_id', '=', 2)
            ->groupBy('product_brand.brand_name', 'store_area.area_name')
            ->get();
        $chart = DB::table('report_product')
            ->Join('product', 'report_product.product_id', '=', 'product.product_id')
            ->Join('product_brand', 'product.brand_id', '=', 'product_brand.brand_id')
            ->Join('store', 'report_product.store_id', '=', 'store.store_id')
            ->Join('store_area', 'store_area.area_id', '=', 'store.area_id')
            ->select('store_area.area_name', DB::raw('SUM(report_product.compliance)/count(report_product.compliance)*100 as persen'))
            ->groupBy('store_area.area_name')
            ->pluck('persen');
        $labels = store_areaModel::pluck('area_name');
        return view('report_product', compact('data', 'labels', 'filter', 'chart', 'area', 'brand', 'brand2', 'data2'));
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        // $data = ReportProductModel::all();
        $data = DB::table('report_product')
            ->Join('product', 'report_product.product_id', '=', 'product.product_id')
            ->Join('product_brand', 'product.brand_id', '=', 'product_brand.brand_id')
            ->Join('store', 'report_product.store_id', '=', 'store.store_id')
            ->Join('store_area', 'store_area.area_id', '=', 'store.area_id')
            ->select('product_brand.brand_name', 'store_area.area_name', DB::raw('SUM(report_product.compliance)/count(report_product.compliance)*100 as persen'))
            ->where('store_area.area_id', 'like', "%" . $cari . "%")
            ->whereBetween('report_product.tanggal', [$start_date, $end_date])
            ->groupBy('product_brand.brand_name', 'store_area.area_name')
            ->get();
        $chart = DB::table('report_product')
            ->Join('product', 'report_product.product_id', '=', 'product.product_id')
            ->Join('product_brand', 'product.brand_id', '=', 'product_brand.brand_id')
            ->Join('store', 'report_product.store_id', '=', 'store.store_id')
            ->Join('store_area', 'store_area.area_id', '=', 'store.area_id')
            ->select('product_brand.brand_name', 'store_area.area_name', DB::raw('SUM(report_product.compliance)/count(report_product.compliance)*100 as persen'))
            ->groupBy('product_brand.brand_name', 'store_area.area_name')
            ->pluck('persen');
        $labels = store_areaModel::pluck('area_name');
        return view('filter', compact('cari', 'data', 'labels', 'chart'));
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportProductModel extends Model
{
    public $table = 'report_product';
    public $primarykey = 'report_id';
    public $fillable = [
        'store_id', 'product_id', 'compliance', 'tanggal',
    ];

    public function store()
    {
        return $this->belongsTo(StoreModel::class, 'store_id', 'store_id');
    }

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product_id', 'product_id');
    }
    use HasFactory;
}

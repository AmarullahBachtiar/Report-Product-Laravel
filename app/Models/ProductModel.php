<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    public $table = 'product';
    public $primarykey = 'product_id';
    public $fillable = [
        'product_name', 'brand_id',
    ];
    public function product_brand()
    {
        return $this->belongsTo(ProductBrandModel::class);
    }
    use HasFactory;
}

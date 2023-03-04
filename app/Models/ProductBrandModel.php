<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBrandModel extends Model
{
    public $table = 'product_brand';
    public $primarykey = 'brand_id';
    public $fillable = [
        'brand_name',
    ];

    public function product()
    {
        return $this->hasMany(ProductModel::class);
    }
    use HasFactory;
}

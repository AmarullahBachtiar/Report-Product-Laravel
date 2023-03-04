<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store_areaModel extends Model
{
    public $table = "store_area";
    protected $primarykey = "area_id";
    protected $fillable = [
        'area_name',
    ];

    public function store()
    {
        return $this->hasMany(StoreModel::class);
    }
    use HasFactory;
}

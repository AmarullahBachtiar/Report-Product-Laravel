<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreModel extends Model
{
    public $table = "store";
    protected $primarykey = "store_id";
    protected $fillable = [
        'store_id', 'store_name', 'account_id',
        'area_id', 'is_active',
    ];
    public function store_area()
    {
        return $this->belongsTo(store_areaModel::class, 'area_id', 'area_id');
    }
    public function store_account()
    {
        return $this->belongsTo(AccountModel::class, 'account_id', 'account_id');
    }
    use HasFactory;
}

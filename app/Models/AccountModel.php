<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    public $table = "store_account";
    protected $primarykey = "account_id";
    protected $fillable = [
        'account_name',
    ];

    public function store()
    {
        return $this->hasMany(StoreModel::class);
    }
    use HasFactory;
}

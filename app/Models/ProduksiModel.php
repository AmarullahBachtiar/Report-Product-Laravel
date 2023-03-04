<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduksiModel extends Model
{
    public $table = "produksi";
    protected $primarykey = "id";
    protected $fillable = [
        'kode_kom', 'tanggal', 'produksi'
    ];
    public function komoditas()
    {
        return $this->belongsTo(KomoditasModel::class, 'kode_kom', 'id');
    }
    use HasFactory;
}

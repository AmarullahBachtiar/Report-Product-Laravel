<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KomoditasModel extends Model
{
    public $table = "komoditas";
    protected $primarykey = "id";
    protected $fillable = [
        'kode_kom', 'nama_kom',
    ];
    public function produksi()
    {
        return $this->hasMany(ProduksiModel::class);
    }
    use HasFactory;
}

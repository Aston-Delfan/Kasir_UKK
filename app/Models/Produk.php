<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'produk_id';

    protected $fillable = [
        'kode',
        'nama_produk',
        'kategori',
        'stok',
        'harga',
    ];

    // Satu produk dapat muncul di banyak detail penjualan
    public function DetailPenjualan()
    {
        return $this->hasMany(DetailPenjualan::class, 'produk_id', 'produk_id');
    }
}

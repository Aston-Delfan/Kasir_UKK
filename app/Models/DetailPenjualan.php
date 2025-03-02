<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    protected $table = 'detail_penjualan';
    protected $primaryKey = 'detail_id';

    protected $fillable = [
        'penjualan_id',
        'produk_id',
        'jumlah_produk',
        'subtotal',
    ];

    // Setiap detail penjualan milik satu penjualan
    public function Penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'penjualan_id', 'penjualan_id');
    }

    // Setiap detail penjualan merujuk ke satu produk
    public function Produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id', 'produk_id');
    }
}

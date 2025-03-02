<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPembelian extends Model
{
    protected $table = 'detail_penjualan';
    protected $primaryKey = 'detail_id';

    protected $fillable = [
        'pembelian_id',
        'produk_id',
        'jumlah_produk',
        'subtotal',
    ];

    // Setiap detail penjualan milik satu penjualan
    public function Pembelian()
    {
        return $this->belongsTo(Pembelian::class, 'pembelian_id', 'pembelian_id');
    }

    // Setiap detail penjualan merujuk ke satu produk
    public function Produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id', 'produk_id');
    }
}

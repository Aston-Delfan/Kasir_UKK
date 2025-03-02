<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian';
    protected $primaryKey = 'pembelian_id';

    protected $fillable = [
        'tanggal_penjualan',
        'total_harga',
        'supplier_id',
    ];

    // Satu penjualan dimiliki oleh satu pelanggan
    public function Supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'supplier_id');
    }

    // Satu penjualan dapat memiliki banyak detail penjualan
    public function DetailPembelian()
    {
        return $this->hasMany(DetailPembelian::class, 'pembelian_id', 'pembelian_id');
    }
}

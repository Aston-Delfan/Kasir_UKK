<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'penjualan_id';

    protected $fillable = [
        'tanggal_penjualan',
        'total_harga',
        'pelanggan_id',
    ];

    // Satu penjualan dimiliki oleh satu pelanggan
    public function Pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'pelanggan_id');
    }

    // Satu penjualan dapat memiliki banyak detail penjualan
    public function DetailPenjualan()
    {
        return $this->hasMany(DetailPenjualan::class, 'penjualan_id', 'penjualan_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    protected $primaryKey = 'pelanggan_id';

    protected $fillable = [
        'nama_pelanggan',
        'alamat',
        'nomor_telepon',
    ];

    // Seorang pelanggan dapat memiliki banyak penjualan
    public function Penjualan()
    {
        return $this->hasMany(Penjualan::class, 'pelanggan_id', 'pelanggan_id');
    }
}

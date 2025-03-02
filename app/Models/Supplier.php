<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perusahaan',
        'nama_kontak',
        'nomor_telepon',
        'email',
        'alamat',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataBarang extends Model
{
    use HasFactory;
    protected $table = 'data_barangs';
    protected $fillable = [
        'nama_barang',
        'harga_barang',
        'stok_barang',
        'jenis_barang',
        'gambar_barang'
    ];
}

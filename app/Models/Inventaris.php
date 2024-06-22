<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    protected $table = 'barang'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'tahun_pengadaan',
        'kode_barang',
        'nama_barang',
        'jumlah_barang',
        'harga_beli',
        'sumber_dana',
        'keadaan_barang', // Sudah ditambahkan di sini
    ];

    protected $attributes = [
        'keadaan_barang' => 'Baik',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelapor',
        'alamat',
        'no_telp',

        'tgl_kejadian',
        'lokasi_kejadian',
        'deskripsi_kejadian',

        'jenis_keluhan',
        'detail_keluhan',

        'file_pengaduan',
    ];
}

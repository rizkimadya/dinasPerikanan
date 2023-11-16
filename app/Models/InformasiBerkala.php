<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiBerkala extends Model
{
    use HasFactory;

    protected $fillable = [
        "kategori_informasi_berkala",
        "judul_informasi_berkala",
        "keterangan_informasi_berkala",
        "file_informasi_berkala",
    ];
}

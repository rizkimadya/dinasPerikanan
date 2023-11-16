<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sss extends Model
{
    use HasFactory;

    protected $fillable = [
        "kategori_sss",
        "judul_sss",
        "keterangan_sss",
        "file_sss",
    ];
}

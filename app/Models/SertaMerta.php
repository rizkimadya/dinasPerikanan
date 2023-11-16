<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SertaMerta extends Model
{
    use HasFactory;

    protected $fillable = [
        "kategori_serta_merta",
        "judul_serta_merta",
        "keterangan_serta_merta",
        "file_serta_merta",
    ];
}

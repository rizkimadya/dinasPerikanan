<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survei extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_responden',
        'no_telp',
        'penilaian_kepuasan',
        'keterangan',
    ];
}

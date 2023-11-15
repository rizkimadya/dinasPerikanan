<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    use HasFactory;

    protected $fillable = [
        "profil_pdf",
        "nama_lengkap",
        "jabatan",
    ];
}

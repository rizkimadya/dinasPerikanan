<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoKegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'link_video',
        'nama_kegiatan',
    ];
}

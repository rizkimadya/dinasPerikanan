<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use App\Models\Blog;
use App\Models\Komentar;
use App\Models\Produk;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Admin.dashboard.index');
    }
}

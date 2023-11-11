<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard-admin');
        }

        return back()->withErrors([
            'password' => 'Email atau password Anda salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

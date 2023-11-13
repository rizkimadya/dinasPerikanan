<?php

namespace App\Http\Controllers;

use App\Models\ProfilKami;
use Illuminate\Http\Request;

class ProfilKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.profil.profilKami.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfilKami $profilKami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfilKami $profilKami)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfilKami $profilKami)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfilKami $profilKami)
    {
        //
    }
}

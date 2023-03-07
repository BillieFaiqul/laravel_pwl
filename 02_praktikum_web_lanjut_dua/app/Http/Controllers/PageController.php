<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return 'Billie Faiqul Izzat, 2141720051';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
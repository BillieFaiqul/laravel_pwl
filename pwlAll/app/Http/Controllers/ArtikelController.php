<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //
    function index(){
        return view('artikel',[
            'artikels' => Artikel::all()
        ]);
    }
}

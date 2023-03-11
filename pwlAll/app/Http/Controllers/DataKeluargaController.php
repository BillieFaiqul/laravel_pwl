<?php

namespace App\Http\Controllers;

use App\Models\DataKeluarga;
use Illuminate\Http\Request;

class DataKeluargaController extends Controller
{
    //
    function index(){
        return view('data-keluarga',[
            'keluargas' => DataKeluarga::all()
        ]);
    }
}

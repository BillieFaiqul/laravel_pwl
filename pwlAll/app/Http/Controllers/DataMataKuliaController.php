<?php

namespace App\Http\Controllers;

use App\Models\DataMataKulia;
use Illuminate\Http\Request;

class DataMataKuliaController extends Controller
{
    //
    function index(){
        return view('data-matakuliah',[
            'matakuliah' => DataMataKulia::all()
        ]);
    }
}

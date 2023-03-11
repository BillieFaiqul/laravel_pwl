<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    //
    function index(){
        return view('hobi',[
            'hobis' => Hobi::all()
        ]);
    }
}

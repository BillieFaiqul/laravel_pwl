<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index($name) {
        return view('news', ['name' => $name]);
    }
}

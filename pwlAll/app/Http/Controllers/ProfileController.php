<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index() {
        return view('profile')
                    ->with('nama', 'Billie Faiqul Izzat')
                    ->with('kelas', 'TI-2A')
                    ->with('nim', 2141720051);
    }
}

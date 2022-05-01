<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelAdmin extends Controller
{
    public function index() {
        $page = 'home';
        return view('layouts.app',compact('page'));
    }
}

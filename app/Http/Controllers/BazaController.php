<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class BazaController extends Controller
{
    public function name(){
        return view('welcome', ['x' => 1]);
    }
    public function first(){
        return view('welcome', 25);
    }
}

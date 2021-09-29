<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockController extends Controller
{

    public function index()
    {
        return 'hello a am Block';
    }
    public function set(){

        return 10+15;
    }
}

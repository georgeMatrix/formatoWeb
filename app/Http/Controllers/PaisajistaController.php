<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisajistaController extends Controller
{
    public function inicio(){
        return view('paisajista.paisajista');
    }
}

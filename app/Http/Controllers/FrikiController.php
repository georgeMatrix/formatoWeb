<?php

namespace App\Http\Controllers;

use App\friki;
use Illuminate\Http\Request;

class FrikiController extends Controller
{
    public function contacto(){
        return view('friki.contact');
    }

    public function precio(){
        return view('friki.pricing');
    }

    public function about(){
        return view('friki.about');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('friki.indexF');
    }
}

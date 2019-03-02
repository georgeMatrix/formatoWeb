<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $posts = \App\Post::all();
        return view('pages.blogR', compact('posts'));
    }
}

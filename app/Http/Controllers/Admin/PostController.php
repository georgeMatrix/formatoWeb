<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('pages.admin.post.index', compact('posts'));
    }

    public function create(){
        $categorias = Category::all();
        return view('pages.admin.post.create', compact('categorias'));
    }
}

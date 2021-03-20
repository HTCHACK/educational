<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Comment;
use App\Email;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('welcome',
        ['categories' => Category::all(),
        'posts' => Post::orderby('created_at','DESC')->get()->all(),
        'comments'=>Comment::where('post_id')->get()->all(),
        'popular'=>Post::limit(5)->orderby('created_at','DESC')->get()->all(),
        'latest'=>Post::limit(2)->orderby('created_at','DESC')->get()->all(),
        'email'=>Email::all(),
        ]);
        
    }
}

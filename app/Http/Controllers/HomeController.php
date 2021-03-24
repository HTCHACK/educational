<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Comment;
use App\Email;
use App\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {

        $posts = Post::orderBy('created_at', 'desc')->paginate(3);

        

        return view('welcome',compact('posts'),
        ['categories' => Category::all(), 
        'comments'=>Comment::where('post_id')->get()->all(),
        'popular'=>Post::limit(5)->orderby('created_at','DESC')->get()->all(),
        'latest'=>Post::limit(2)->orderby('created_at','DESC')->get()->all(),
        'email'=>Email::all(),
        'banner'=>Banner::all(),
        ]);
        
    }

    
}

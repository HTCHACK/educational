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
        [
        'comments'=>Comment::where('post_id')->get()->all(),
        'email'=>Email::all(),
        'banner'=>Banner::all(),
        ]);

    }


}

<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','store');
        $this->middleware('can:admin')->except('show','store');
    }

    public function index()
    {
        return view('admin.comment.index', ['comments' => Comment::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.show', );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {

        Comment::create([
            'name'=>$request->input('name'),
            'phone_number'=>$request->input('phone_number'),
            'comment'=>$request->input('comment'),
            'post_id'=>$request->id,
        ]);



        return redirect()->back()->with('success', 'Comment Successfully posted');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

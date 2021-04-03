<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Comment;
use App\Gallery;
use App\Email;
use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
        $this->middleware('can:admin')->except('show');
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp,gif,svg,mp4|max:2048',
        ]);

        $input = $request->all();
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();

        $input['image'] = $imageName;

        request()->image->move(public_path('storage'), $imageName);

        Post::create($input);

        return redirect()->route('posts.index')->with('success', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        return view(
            'post.show',
            [
                'post' => Post::orderBy('created_at', 'DESC')->findorFail($id),
                'categories' => Category::all(),
                'comments' => Comment::where('post_id', $id)->orderBy('created_at', 'DESC')->get(),
                'popular' => Post::limit(4)->orderby('created_at', 'DESC')->get()->all(),
                'email' => Email::all(),
            ]
        );
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.post.edit', ['post' => Post::findorFail($id)], ['categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp,gif,svg,mp4|max:2048',

        ]);

        $input = $request->all();


        $imageName = time() . '.' . request()->image->getClientOriginalExtension();

        $input['image'] = $imageName;

        request()->image->move(public_path('storage'), $imageName);


        Post::findorFail($post->id)
            ->update($input);

        return redirect()->route('posts.index')->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $find = Post::findorFail($post->id);
        if ($find->delete()) {

            return redirect()->route('posts.index')->with('success', 'Post deleted Successfully');
        }

        return back()->withInput()->with('errors', 'Post could not be deleted');
    }
}

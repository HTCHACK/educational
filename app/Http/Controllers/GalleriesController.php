<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryRequest;

class GalleriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','GalleryPage');
        $this->middleware('can:admin')->except('show','GalleryPage');
    }

    public function index()
    {
        return view('admin.gallery.index', ['galleries' => Gallery::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Gallery $request)
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $input = $request->all();

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $input['image'] = $imageName;
        request()->image->move(public_path('storage'), $imageName);

        Gallery::create($input);

        return redirect()->route('galleries.index')->with('success', 'Successfully Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

        return view('admin.gallery.edit', ['gallery' => Gallery::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $input = $request->all();
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $input['image'] = $imageName;
        request()->image->move(public_path('storage'), $imageName);


        Gallery::findorFail($gallery->id)
            ->update($input);

        return redirect()->route('galleries.index')->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $findImage = Gallery::findorFail($gallery->id);
        if ($findImage->delete()) {

            return redirect()->route('galleries.index')->with('success', 'Image deleted Successfully');
        }

        return back()->withInput()->with('errors', 'Image could not be deleted');
    }

    public function GalleryPage()
    {
        return view('gallery.index', ['galleries' => Gallery::all()],['categories' => Category::all()]);
    }
}

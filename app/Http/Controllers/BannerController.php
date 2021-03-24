<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show',);
        $this->middleware('can:admin')->except('show',);
    }

    public function index()
    {
        return view('admin.banner.index', ['banners' => Banner::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        
        $input = $request->all();

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $input['image'] = $imageName;
        request()->image->move(public_path('storage'), $imageName);

        Banner::create($input);

        return redirect()->route('banners.index')->with('success', 'Successfully Uploaded');
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
        return view('admin.banner.edit', ['banner' => Banner::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, Banner $banner)
    {
        $input = $request->all();
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $input['image'] = $imageName;
        request()->image->move(public_path('storage'), $imageName);


        Banner::findorFail($banner->id)
            ->update($input);

        return redirect()->route('banners.index')->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $findImage = Banner::findorFail($banner->id);
        if ($findImage->delete()) {

            return redirect()->route('banners.index')->with('success', 'Image deleted Successfully');
        }

        return back()->withInput()->with('errors', 'Image could not be deleted');
    }
}

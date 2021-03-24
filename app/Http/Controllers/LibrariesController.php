<?php

namespace App\Http\Controllers;

use App\Library;
use Illuminate\Http\Request;

class LibrariesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','LibraryPage');
        $this->middleware('can:admin')->except('show','LibraryPage');
    }

    public function index()
    {
        $libraries = Library::paginate(6);
        return view('admin.library.index',compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library.create');
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
            'file' =>'required|mimes:pdf,xlsx,xls,zip,rar,csv,pptx,docx,ppt,djvu|max:10240',
        ]);

        $input = $request->all();
        $fileName = time() . '.' . request()->file->getClientOriginalExtension();
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $input['file'] = $fileName;
        $input['image'] = $imageName;
        request()->file->move(public_path('storage'), $fileName);
        request()->image->move(public_path('storage'), $imageName);

        Library::create($input);

        return redirect()->route('libraries.index')->with('success', 'Successfully Uploaded');
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
        return view('admin.library.edit',['library' => Library::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp,gif,svg,mp4|max:2048',
            'file' =>'required|mimes:pdf,xlsx,xls,zip,rar,csv,pptx,docx,ppt,djvu|10240',
        ]);


        $input = $request->all();

        $fileName = time() . '.' . request()->file->getClientOriginalExtension();
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $input['file'] = $fileName;
        $input['image'] = $imageName;
        request()->file->move(public_path('storage'), $fileName);
        request()->image->move(public_path('storage'), $imageName);

        Library::findorFail($library->id)
        ->update($input);

        return redirect()->route('libraries.index')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $library)
    {
        $findImage = Library::findorFail($library->id);
        if ($findImage->delete()) {

            return redirect()->route('libraries.index')->with('success', 'Book deleted Successfully');
        }

        return back()->withInput()->with('errors', 'Book could not be deleted');
    }

    public function LibraryPage(){
        $libraries = Library::orderBy('updated_at', 'desc')->paginate(6);
        return view('library.index',compact('libraries'));
    }
}

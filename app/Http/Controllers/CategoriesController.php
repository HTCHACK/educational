<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','CategoryPage');
        $this->middleware('can:admin')->except('show','CategoryPage');
    }

    public function index()
    {
        return view('admin.category.index', ['categories'=>Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('categories.index')->with('success', 'Successfully created');
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
        return view('admin.category.edit',['category'=>Category::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
        Category::findorFail($category->id)
        ->update([
            'name'=>$request->input('name'),
        ]);

        return redirect()->route('categories.index')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::findorFail($category->id)
        ->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted Successfully');
        
    }

    public function CategoryPage()
    {
        return view('layouts.footer', ['categories' => Category::all()]);
    }
}

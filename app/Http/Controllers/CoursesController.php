<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Email;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','CoursesPage',);
        $this->middleware('can:admin')->except('show','CoursesPage',);
    }

    public function index()
    {
        return view('admin.course.index', ['courses' => Course::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
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
            'image' => 'required|mimes:png,jpg,jpeg,webp,gif,svg|max:2048',
        ]);

        $input = $request->all();


        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $input['image'] = $imageName;
        request()->image->move(public_path('storage'), $imageName);

        Course::create($input);

        return redirect()->route('courses.index')->with('success', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('course.show',
      [
        'course'=>Course::limit(5)->orderBy('created_at','DESC')->findorFail($id),
        'email'=>Email::all(),
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
        return view('admin.course.edit', ['course' => Course::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp,gif,svg,mp4|max:2048',
        ]);

        $input = $request->all();

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $input['image'] = $imageName;
        request()->image->move(public_path('storage'), $imageName);


        Course::findorFail($course->id)
            ->update($input);

        return redirect()->route('courses.index')->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $find = Course::findorFail($course->id);
        if ($find->delete()) {

            return redirect()->route('courses.index')->with('success', 'Course deleted Successfully');
        }

        return back()->withInput()->with('errors', 'Course could not be deleted');
    }

    public function CoursesPage(){
        return view('course.index',['courses'=>Course::all(),'email'=>Email::all()]);
    }
}

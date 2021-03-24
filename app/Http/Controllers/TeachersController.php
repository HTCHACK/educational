<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequest;

class TeachersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','TeacherPage');
        $this->middleware('can:admin')->except('show','TeacherPage');
    }


    public function index()
    {
        return view('admin.teacher.index',['teachers'=>Teacher::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
        $input = $request->all();

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $input['image'] = $imageName;
        request()->image->move(public_path('storage'), $imageName);

        Teacher::create($input);

        return redirect()->route('teachers.index')->with('success', 'Successfully Uploaded');
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
        return view('admin.teacher.edit',['teacher'=>Teacher::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherRequest $request,Teacher $teacher)
    {
        $input = $request->all();

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $input['image'] = $imageName;
        request()->image->move(public_path('storage'), $imageName);

        Teacher::findorFail($teacher->id)
        ->update($input);

        return redirect()->route('teachers.index')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $findImage = Teacher::findorFail($teacher->id);
        if ($findImage->delete()) {

            return redirect()->route('teachers.index')->with('success', 'Teacher deleted Successfully');
        }

        return back()->withInput()->with('errors', 'Image could not be deleted');
    }

    public function TeacherPage(){

        $teachers = Teacher::orderBy('created_at', 'desc')->paginate(3);
        return view('teacher.index',compact('teachers'));
    }
}

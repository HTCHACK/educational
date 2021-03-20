<?php

namespace App\Http\Controllers;
use App\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','store');
        $this->middleware('can:admin')->except('show','store');
    }

    public function index()
    {
        return view('admin.email.index',['emails'=>Email::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Email::create([
            'email' => $request->input('email'),
        ]);

        return redirect()->back();
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
    public function destroy(Email $email)
    {
        $findemail = Email::findorFail($email->id);
        if ($findemail->delete()) {

            return redirect()->route('emails.index')->with('success', 'Email deleted Successfully');
        }

        return back()->withInput()->with('errors', 'Email could not be deleted');
    }
}

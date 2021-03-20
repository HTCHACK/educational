<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Category;
use App\Course;
use App\Email;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','ContactPage','store');
        $this->middleware('can:admin')->except('show','ContactPage','store');
    }

    public function index()
    {
        return view('admin.contact.index', 
        [
            'contacts'=>Contact::all(),
            
        ]);
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
    public function store(ContactRequest $request)
    {
        Contact::create([
            'name'=>$request->input('name'),
            'phone_number'=>$request->input('phone_number'),
            'message'=>$request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Message Successfully Send');
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
    public function destroy(Contact $contact)
    {
        $findemail = Contact::findorFail($contact->id);
        if ($findemail->delete()) {

            return redirect()->route('contacts.index')->with('success', 'Contact deleted Successfully');
        }

        return back()->withInput()->with('errors', 'Contact could not be deleted');
    }

    public function ContactPage(){
        return view('contact.index',['categories' => Category::all(),
        'courses' => Course::all(),
        'email'=>Email::all(),
        ]);
    }
}

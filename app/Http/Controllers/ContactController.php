<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;

class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Validates if information was send
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);

        //Process the data and submit it
        $contact = new Contacts();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        //if successful and redirect
        if ($contact->save()) {
            return redirect()->route('welcome');
        } else {
            return redirect()->route('/contact');
        }
    }
}
<?php

namespace App\Http\Controllers\adminResources;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contacts;

class adminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contacts::all();
        return view('admin.adminContact.index')->with('Contacts', $contacts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contacts::findOrFail($id);
        $contacts = Contacts::all();

        return view('admin.adminContact.show')->with('contact', $contact)->with('Contacts', $contacts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get a particular data from the id
        $contact = Contacts::findOrFail($id);

        //Delete it then redirect
        if ($contact->delete()) {
            return redirect('admin/adminContact');
        }
    }
}
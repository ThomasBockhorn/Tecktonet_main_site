<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;

class adminController extends Controller
{
    public function index()
    {
        $contacts = Contacts::all();

        return view('admin.admin')->with('Contacts', $contacts);
    }
}
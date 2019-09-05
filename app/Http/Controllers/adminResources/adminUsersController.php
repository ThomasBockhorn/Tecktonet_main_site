<?php

namespace App\Http\Controllers\adminResources;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class adminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the currently authenticated user...
        $users = User::all();

        //Return the view, and pass in the group of records
        return view('admin.adminUsers.index')->with('users', $users);
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
        $user = User::findOrFail($id);

        //Delete it then redirect
        if ($user->delete()) {
            return redirect('admin/adminUsers');
        }
    }
}
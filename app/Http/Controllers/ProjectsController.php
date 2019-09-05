<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectsModel;
use Illuminate\Support\Str;

class ProjectsController extends Controller
{

    //Display listing of all projects
    public function index()
    {
        //Go to the model and get a group of records
        $projects = ProjectsModel::orderBy('id', 'desc')->paginate(5);

        //Return the view, and pass in the group of records
        return view('projects.index')->with('projects', $projects);
    }

    //Show an individual project
    public function show($id)
    {
        //Use the model to get 1 record from the database
        $project = ProjectsModel::findOrFail($id);

        //Show the view and pass the record
        return view('projects.show')->with('project', $project);
    }
}
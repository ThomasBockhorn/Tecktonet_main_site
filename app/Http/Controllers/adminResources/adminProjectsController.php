<?php

namespace App\Http\Controllers\adminResources;

use Illuminate\Http\Request;
use App\ProjectsModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class adminProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Go to the model and get a group of records
        $projects = ProjectsModel::orderBy('id', 'desc')->paginate(5);

        //Return the view, and pass in the group of records
        return view('admin.adminProjects.index')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminProjects.create');
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
            'title' => 'required|max:255',
            'image' => 'nullable|image|max:1999'
        ]);

        //Process the data and submit it
        $project = new ProjectsModel();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->url_link = $request->url_link;

        //Uploads image
        if ($request->hasFile('image')) {
            $project->image = $request->file('image')->store('images', 'public');
        }

        //if successful and redirect
        if ($project->save()) {
            return redirect()->route('adminProjects.show', $project->id);
        } else {
            return redirect()->route('adminProjects.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Use the model to get 1 record from the database
        $project = ProjectsModel::findOrFail($id);

        //Show the view and pass the record
        return view('admin.adminProjects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Use the model to get 1 record from the database
        $project = ProjectsModel::findOrFail($id);

         //Show the view and pass the record
        return view('admin.adminProjects.edit')->with('project', $project);
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
         //Validates if information was send
        $this->validate($request, [
            'title' => 'required|max:255',
            'image' => 'nullable|image|max:1999'
        ]);

        //Process the data and submit it
        $project = ProjectsModel::findOrFail($id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->url_link = $request->url_link;

        //Uploads image
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($project->image);
            $project->image = $request->file('image')->store('images', 'public');
        }

        //if successful and redirect
        if ($project->save()) {
            return redirect('admin/adminProjects');
        }
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
        $project = ProjectsModel::findOrFail($id);

        //Delete image
        Storage::disk('public')->delete($project->image);

        //Delete it then redirect
        if ($project->delete()) {
            return redirect('admin/adminProjects');
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPostsModels;
use App\ProjectsModel;

class welcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Go to the models and get a group of records
        $posts = BlogPostsModels::orderBy('id', 'desc')->paginate(3);
        $projects = ProjectsModel::orderBy('id', 'desc')->paginate(3);

        return view('welcome')->with('Blog_Posts', $posts)->with('Projects', $projects);
    }
}
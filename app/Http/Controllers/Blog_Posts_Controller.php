<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPostsModels;

class Blog_Posts_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Go to the model and get a group of records
        $posts = BlogPostsModels::orderBy('id', 'desc')->paginate(9);

        //Return the view, and pass in the group of records
        return view('blog.index')->with('Blog_Posts', $posts);
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
        $post = BlogPostsModels::findOrFail($id);

        //Show the view and pass the record
        return view('blog.show')->with('post', $post);
    }
}
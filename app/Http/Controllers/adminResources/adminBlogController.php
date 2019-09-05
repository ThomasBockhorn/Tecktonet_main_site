<?php

namespace App\Http\Controllers\adminResources;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\BlogPostsModels;

class adminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Go to the model and get a group of records
        $posts = BlogPostsModels::orderBy('id', 'desc')->paginate(5);

        //Return the view, and pass in the group of records
        return view('admin.adminBlog.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminBlog.create');
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
            'author' => 'required',
            'image' => 'nullable|image|max:1999'
        ]);

        //Process the data and submit it
        $post = new BlogPostsModels();
        $post->title = $request->title;
        $post->author = $request->author;
        $post->author_id = 1;  //I need to change this more dynamically once I add permissions
        $post->description = $request->description;

        //Uploads image
        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images', 'public');
        }

        //if successful and redirect
        if ($post->save()) {
            return redirect()->route('adminBlog.show', $post->id);
        } else {
            return redirect()->route('adminBlog.create');
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
        $post = BlogPostsModels::findOrFail($id);

         //Show the view and pass the record
        return view('admin.adminBlog.show')->with('post', $post);
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
        $post = BlogPostsModels::findOrFail($id);

         //Show the view and pass the record
        return view('admin.adminBlog.edit')->with('post', $post);
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
            'author' => 'required',
            'image' => 'nullable|image|max:1999'
        ]);

        //Process the data and submit it
        $post = BlogPostsModels::findOrFail($id);
        $post->title = $request->title;
        $post->author = $request->author;
        $post->description = $request->description;

        //Uploads image
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($post->image);
            $post->image = $request->file('image')->store('images', 'public');
        }

         //if successful and redirect
        if ($post->save()) {
            return redirect('admin/adminBlog');
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
        $post = BlogPostsModels::findOrFail($id);

        //Delete image
        Storage::disk('public')->delete($post->image);

        //Delete it then redirect
        if ($post->delete()) {
            return redirect('admin/adminBlog');
        }
    }
}
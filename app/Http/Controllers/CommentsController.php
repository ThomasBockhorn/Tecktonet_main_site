<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPostsModels;
use App\Comments;
use Auth;

class CommentsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|min:15',
        ]);

        $comment = new Comments();
        $comment->content = $request->content;
        $comment->user()->associate(Auth::id());

        $post = BlogPostsModels::findOrFail($request->post_id);
        $post->comments()->save($comment);

        return redirect()->route('blog.show', $post->id);
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
         //Process the data and submit it
        $comment = Comments::findOrFail($id);
        $comment->content = $request->content;
        $comment->user()->associate(Auth::id());

        $post = BlogPostsModels::findOrFail($comment->post_id);

        //if successful and redirect
        if ($comment->save()) {
            return redirect()->route('blog.show', $post->id);
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
        $comment = Comments::findOrFail($id);

        //Delete it then redirect
        $comment->delete();
        return redirect()->route('blog.show', $comment->post_id);
    }
}
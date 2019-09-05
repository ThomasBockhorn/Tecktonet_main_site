@extends('admin.layouts.template')
@section('content')
{{ Breadcrumbs::render('adminBlog.edit', $post)}}
<div class="container">
    <h1>Edit a Post</h1>
    <hr>
    <form method="POST" action="{{ route('adminBlog.update', $post->id)}}" role="form" enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <label for="title">Post Title:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" class="form-control" value="{{ $post->author }}">
        <label for="image">Image:</label>
        <input type="file" class="form-control-file" id="image" name="image">
        <label for="description">Text:</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"> {{ $post->description}} </textarea>
        <br>
        <input type="submit" value="Submit Post" class="btn btn-primary">
    </form>
</div>
@endsection

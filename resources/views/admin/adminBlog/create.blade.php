@extends('admin.layouts.template')
@section('content')
{{ Breadcrumbs::render('adminBlog.create')}}
<div class="container">
    <h1>Add a Post</h1>
    <hr>
    <form method='POST' role="form" action="{{ route('adminBlog.store') }}" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="title">Project Title:</label>
        <input type="text" name="title" id="title" class="form-control">
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" class="form-control">
        <label for="image">Image:</label>
        <input type="file" class="form-control-file" id="image" name="image">
        <label for="description">Text:</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Submit Post" class="btn btn-primary">
    </form>
</div>

@endsection

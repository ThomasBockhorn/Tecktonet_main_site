@extends('admin.layouts.template')
@section('content')
{{ Breadcrumbs::render('adminProjects.edit', $project)}}
<div class="container">
    <h1>Edit a Project</h1>
    <hr>
    <form method="POST" action="{{ route('adminProjects.update', $project->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">Project Title:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}">
        <label for="description">More Information:</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"> {{ $project->description}} </textarea>
        <label for="image">Image:</label>
        <input type="file" class="form-control-file" id="image" name="image">
        <label for="url_link">URL Address:</label>
        <input type="text" name="url_link" id="url_link" class="form-control" value="{{ $project->url_link}}">
        <br>
        <input type="submit" value="Submit Project" class="btn btn-primary">
    </form>
</div>
@endsection

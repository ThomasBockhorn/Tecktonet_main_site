@extends('admin.layouts.template')
@section('content')
{{ Breadcrumbs::render()}}
<div class="container">
    <h1>Add a Project</h1>
    <hr>
    <form method='POST' action="{{ route('adminProjects.store') }}" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="title">Project Title:</label>
        <input type="text" name="title" id="title" class="form-control">
        <label for="description">More Information:</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        <label for="image">Image:</label>
        <input type="file" class="form-control-file" id="image" name="image">
        <label for="url_link">URL Address:</label>
        <input type="text" name="url_link" id="url_link" class="form-control">
        <br>
        <input type="submit" value="Submit Project" class="btn btn-primary">
    </form>
</div>
@endsection

@extends('admin.layouts.template')
@section('content')
{{ Breadcrumbs::render('adminProjects.show', $project)}}
<div class="container">
    <h1>{{$project->title}}</h1>
    <hr>
    <p>
        {{$project->description}}
    </p>
    <a href="{{ $project->url_link}}" class="text-info">Live Project, Click Here</a>
    <br>
    <div>
        <a href="{{ route('adminProjects.edit', $project->id)}}" class="btn btn-info">Edit this Project</a>
        <a href="{{ route('adminProjects.index')}}" class="btn btn-primary">Back to Projects</a>
    </div>

</div>
@endsection

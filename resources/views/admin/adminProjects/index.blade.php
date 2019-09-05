@extends('admin.layouts.template')
@section('content')
{{ Breadcrumbs::render()}}
<div class="container">
    <h1>Recent Projects:</h1>
    <hr>
    @foreach($projects as $project)
        <div class="jumbotron">
            <h3> {{$project->title}}</h3>
            <p>
                {{str_limit($project->description, $limit = 50, $end = '...') }}
            </p>
            <div>
                <a href="{{ route('adminProjects.show', $project->id)}}" class="btn btn-primary">Further Info</a>

                <form action="{{url('admin/adminProjects', [$project->id])}}" method="POST">
                    <br>
                   @csrf
                   @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection

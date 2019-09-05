@extends('layouts.app')
@section('content')
<!--Header=========================-->
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4">{{ $project->title}}</h2>
                <div class="mx-auto" style="width: 250px;">
                {{ Breadcrumbs::render('projects.show', $project)}}
            </div>
        </div>
    </div>
</section>

<!--individual project===================-->
<section class="blog" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="{{ asset('storage/'.$project->image)}}" alt="{{$project->title}}">
            </div>
            <div class="col-md-8">
                <p>{{$project->description}}</p>
            </div>
            <div class="d-flex flex-column">
                <a href="{{ route('projects.index')}}" class="btn btn-main m-1">Home</a>
                <a href="{{$project->url_link}}" class="btn btn-main m-1">Visit the Site</a>
            </div>
        </div>
    </div>
</section>

@endsection

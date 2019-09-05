@extends('layouts.app')
@section('content')

<!--Header==============================-->
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4">Portfolio</h2>
                <div class="mx-auto" style="width: 250px;">
                    {{ Breadcrumbs::render()}}
                </div>
            </div>
        </div>
    </div>
</section>

<!--main project section===================-->
<section class="blog" id="blog">
    <div class="container">
        <div class="row justify-content-center">

            @foreach($projects as $project)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/'.$project->image) }}" alt="{{$project->title}}">
                     <div class="card-body">
                        <h5 class="card-title">{{$project->title }}</h5>
                        <p class="card-text">{{str_limit($project->description, $limit = 50, $end = '...')}}</p>
                        <a href="{{route('projects.show', $project->id)}}" class="btn btn-main">See More</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

@endsection

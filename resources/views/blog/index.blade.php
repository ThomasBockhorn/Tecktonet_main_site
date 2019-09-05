@extends('layouts.app')
@section('content')

<!--Header====================================-->
<section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2 class="display-4">Blog</h2>
                <div class="mx-auto" style="width: 18rem;">
                        {{ Breadcrumbs::render()}}
                </div>
            </div>
        </div>
    </div>
</section>

<!--Blog posts==============================-->
<section class="blog" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">

            @foreach($Blog_Posts as $post)
                <!-- single blog post -->
				<div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/'.$post->image) }}" alt="{{$post->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title }}</h5>
                        <p class="card-text">{{str_limit($post->description, $limit = 50, $end = '...')}}</p>
                        <a href="{{route('blog.show', $post->id)}}" class="btn btn-main">See More</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

@endsection

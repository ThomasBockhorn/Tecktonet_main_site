@extends('layouts.app')
@section('content')

<!--Header================================-->
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4">{{ $post->title}}</h2>
                <div class="mx-auto" style="width: 250px;">
                    {{ Breadcrumbs::render('blog.show', $post)}}
                </div>
            </div>
        </div>
     </div>
</section>

<!--Single Blog Post==========================-->
<section class="blog" id="blog">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="{{ asset('storage/'.$post->image)}}" alt="{{$post->title}}">
            </div>
            <div class="col-md-8">
                <p>{{$post->description}}</p>
            </div>
        </div>

    <div class="row">
        <div class="col-md-12">
            <div class="border"></div>

                @if($post->comments()->count() > 0)
                    @foreach ($post->comments as $comment )
                        <div class="jumbotron">
                            <h6>
                                Commented by {{ $comment->user->name}}
                            </h6>
                            <h6>
                                Date: {{$comment->user->created_at}}
                            </h6>
                            <div class="panel-body">
                                <p>
                                    {{ $comment->content}}
                                </p>
                            </div>

                    <!-- Button trigger modal -->
                         @if(Auth::check() && (Auth::user()->id == $comment->user_id) || (Auth::user()->email == "thomas.bockhorn@tecktonet.com"))
                            <button type="button" class="btn btn-main" data-toggle="modal" data-target="#exampleModal">
                                Edit
                            </button>
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <br>
                                <input type="submit" class="btn btn-main" value="Delete">
                            </form>
                        @endif

                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

<br>

<section>
    <div class="jumbotron">
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            @if(Auth::check())
                <h4>Submit a comment:</h4>
                <textarea name="content" id="" rows="4" class="form-control"></textarea>
                <input type="hidden" value="{{ $post->id}}" name="post_id">
                <br>
                <button class="btn btn-main">Submit</button>
            @else
                <h4>To submit a comment, log in or register:</h4>
                <a class="btn btn-main" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif
        </form>

        <br>
        <div>
            <a href="{{ route('blog.index')}}" class="btn btn-main">Home</a>
        </div>

    </div>

    <!--Inserts the edit comment modal if the comment was submitted========-->
    @isset($comment->id)
        @include('_includes/modal')
    @endisset
    </div>
</section>

@endsection

@extends('admin.layouts.template')
@section('content')
{{ Breadcrumbs::render('adminBlog.show', $post)}}
<div class="container">
    <h1>{{$post->title}}</h1>
    <h3>By: {{$post->author}}</h3>
    <h4>On: {{$post->created_at}}</h4>
    <hr>
    <p>
        {{$post->description}}
    </p>
    <br>
    <div>
        <a href="{{ route('adminBlog.edit', $post->id)}}" class="btn btn-info">Edit this Post</a>
        <a href="{{ route('adminBlog.index')}}" class="btn btn-primary">Back to Blog</a>
    </div>

</div>
@endsection

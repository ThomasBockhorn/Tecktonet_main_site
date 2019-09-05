@extends('admin.layouts.template')
@section('content')
{{ Breadcrumbs::render()}}
<div class="container">
    <h1>Recent Posts:</h1>
    <hr>
    @foreach($posts as $post)
        <div class="jumbotron">
            <h3> {{$post->title}}</h3>
            <h3>{{$post->author}}</h3>
            <h3>{{$post->created_at}}</h3>
            <p>
                {{str_limit($post->description, $limit = 50, $end = '...') }}
            </p>
            <div>
                <a href="{{ route('adminBlog.show', $post->id)}}" class="btn btn-primary">Further Info</a>

                <form action="{{url('admin/adminBlog', [$post->id])}}" method="POST">
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

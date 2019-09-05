@extends('admin.layouts.template')
@section('content')
{{ Breadcrumbs::render('adminContact.show', $contact)}}
<div class="container">
        <h1>{{$contact->subject}}</h1>
        <h3>By: {{$contact->name}}</h3>
        <h4>On: {{$contact->created_at}}</h4>
        <hr>
        <p>
            {{$contact->message}}
        </p>
        <br>
        <div>
            <a href="{{ route('adminContact.index')}}" class="btn btn-primary">Back to Contacts</a>
            <form action="{{url('admin/adminContact', [$contact->id])}}" method="POST">
                <br>
               @csrf
               @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>




</div>
@endsection

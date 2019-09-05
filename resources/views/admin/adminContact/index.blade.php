@extends('admin.layouts.template')
@section('content')
{{ Breadcrumbs::render()}}
<div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @isset($Contacts)
                    @foreach ($Contacts as $contact)
                        <tr>
                            <th scope="row"> {{$contact->id}} </th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>
                                <a href="{{ route('adminContact.show', $contact->id) }}" class="btn btn-primary">View</a>
                            </td>
                            <td>
                                <form action="{{url('admin/adminContact', [$contact->id])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>






@endsection

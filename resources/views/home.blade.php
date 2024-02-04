@extends('master')

@section('title')
{{-- <h1>Home page</h1> --}}
<title>Home page</title>
@endsection

@section('content')
{{-- <h1>Home page</h1> --}}
<h1>Home page</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Joined date</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user as $users)
        <tr>
            <th scope="row"> {{$users->id}} </th>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->phone}}</td>
            <td>{{$users->created_at}}</td>
        </tr>
        @endforeach


    </tbody>
  </table>


@endsection

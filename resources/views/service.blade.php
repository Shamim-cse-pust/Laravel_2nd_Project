@extends('master')

@section('title')
{{-- <h1>Home page</h1> --}}
<title>Service page</title>
@endsection


@section('content')
<h1>Home page</h1>
{{-- <h1>{{$page_name}}</h1> --}}
{{-- <h1>{{$service_name[0]}}</h1>
@if ($service_name[1]=="phone number1")
    <h1> {{$service_name[1]}} </h1>
@endif --}}

@foreach ($product as $keys=>$value)
<li >{{$keys}} => {{$value}}</li>


@endforeach


@endsection

@extends ('layouts.app')

@section('title','Home')

@include('includes.header')

@section('content')
    <h1>Home page</h1>
    <h1><a href="conference-create"><button class="btn btn-primary"></button>Create new conference</a></h1>
@endsection
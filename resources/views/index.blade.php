@extends ('layouts.app')

@section('title','Home')

@include('includes.header')

@section('content')
    @guest
<body background="https://media.istockphoto.com/id/1459545336/vector/it-conference-vector-template-abstract-halftone-dotted-black-background-for-business-meeting.jpg?s=612x612&w=0&k=20&c=zprHg5yOTJFxXuMDBXFXqS7O_FsC76Wkxeo1CnuzzCI="></body>
    @else
    <h1>ADMIN PANEL</h1>
    <div><h1><a href="conference-create"><button class="btn btn-primary">Create new conference</button></a></h1></div>
    @endguest

@endsection
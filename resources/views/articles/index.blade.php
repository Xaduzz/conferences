@extends('layouts.app')

@section('content')
<h1><a href="conference-create"><button class="btn btn-primary"></button></a></h1>
    @foreach ($articles as $article)
    <h1>{{$article['title']}}</h1>
    <p>{{$article['content']}}</p>
        <br>
    @endforeach

@endsection
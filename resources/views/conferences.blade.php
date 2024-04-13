@extends ('layouts.app')

@section('title','Messages')

@include('includes.header')

@section('content')
    <h1>Message page</h1>
    @foreach ($data as $item)
        <div class="alert alert-info">
            <h3>{{ $item->title }}</h3>
            <img src="{{$item->photolink}}" alt="here should be a photo">
            <p>{{$item->content}}</p>
            <p>{{$item->created_at}}</p>
            <a href="{{route('conference-data-one', $item->id)}}"><button class="btn btn-warning">View details</button></a>
        </div>
    @endforeach
@endsection
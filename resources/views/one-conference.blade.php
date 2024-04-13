@extends ('layouts.app')

@section('title','Conference')

@include('includes.header')

@section('content')
    <h1>{{$data->title}}</h1>
    <div class="alert alert-info">
        <h3>{{ $data->title }}</h3>
            <img src="{{$data->photolink}}" alt="PHOTO is not exist" width="300" height="250">
            <p>{{$data->created_at}}</p>
            <p>{{$data->content}}</p>
            <a href="{{route('conference-update',$data->id)}}"><button class='btn btn-primary'>Update</button></a>
            <a href="{{route('conference-delete',$data->id)}}"><button class='btn btn-danger'>Delete</button></a>
    </div>
@endsection
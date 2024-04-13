@extends ('layouts.app')

@section('title','Message')

@include('includes.header')

@section('content')
    <h1>{{$data->name}}</h1>
    <div class="alert alert-info">
        <h3>{{ $data->name }}</h3>
            <p>{{$data->email}}</p>
            <p>{{$data->company}}</p>
            <p>{{$data->created_at}}</p>
            <p>{{$data->message}}</p>
            <a href="{{route('contact-update',$data->id)}}"><button class='btn btn-primary'>Update</button></a>
            <a href="{{route('contact-delete',$data->id)}}"><button class='btn btn-danger'>Delete</button></a>
    </div>
@endsection
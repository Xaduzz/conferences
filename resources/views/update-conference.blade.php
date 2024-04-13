@extends('layouts.app')

@section('title','Home')

@section('content') 
    <h1>conference updating page</h1>
    @if ($errors->any())
       <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach    
        </ul>    
    </div> 
    @endif

    @if (@session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
        
    @endif
    @include('includes.header')
    <form action="{{route('conference-update-submit', $data->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">•</label>
            <input type="text" name="title" value="{{$data->title}}" placeholder="Name" id="title">
        </div>

        <div class="form-group">
            <label for="photolink">•</label>
            <input type="text" name="photolink" value="{{$data->photolink}}" placeholder="Paste URL for the photo" id="photolink">
        </div>
    
        <div class="form-group">
            <label for="content">•</label>
            <textarea name="content" id="content" placeholder="Write description here..." cols="30" rows="10">{{$data->content}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
    
    
@endsection    
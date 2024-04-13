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
        
        <div class="form-group">
            <label for="date">•</label>
            <input type="text" name="date" value="{{$data->conference_date}}" placeholder="format: yyyy-mm-dd" id="date">
        </div>

        <div class="form-group">
            <label for="address">•</label>
            <input type="text" name="address" value="{{$data->address}}" placeholder="Write address here" id="address">
        </div>

        <div class="form-group">
            <label for="country">•</label>
            <input type="text" name="country" value="{{$data->country}}" placeholder="Write hosting country here.." id="country">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
    
    
@endsection    
@extends('layouts.app')

@section('title','message update')

@section('content') 
    <h1>Message Update</h1>
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
    <form action="{{route('contact-update-submit', $data->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">•</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Name" id="name">
        </div>
    
        <div class="form-group">
            <label for="email">•</label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="example@mail.com" id="email">
        </div>
    
        <div class="form-group">
            <label for="Organization">•</label>
            <input type="text" name="company" value="{{$data->company}}" placeholder="Your Company" id="company">
        </div>
    
        <div class="form-group">
            <label for="message">•</label>
            <textarea name="message" id="message" value="{{$data->message}}" placeholder="Write here..." cols="30" rows="10">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
    
    
@endsection    
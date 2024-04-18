@extends('layouts.app')

@section('title','Home')

@section('content') 

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
    <h1>Contact with our team!
    </h1>
    <form action="{{route('contact-form') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Your name:</label>
            <input type="text" name="name" placeholder="Name" id="name">
        </div>
    
        <div class="form-group">
            <label for="email">Your eMail:   </label>
            <input type="text" name="email" placeholder="example@mail.com" id="email">
        </div>
    
        <div class="form-group">
            <label for="Organization">Your company:  </label>
            <input type="text" name="company" placeholder="Your Company" id="company">
        </div>
    
        <div class="form-group">
            <label for="message"></label>
            <textarea name="message" id="message" placeholder="Write here your message..." cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Sent</button>
    </form>
    
    
@endsection    
@extends('layouts.app')

@section('title','Home')

@section('content') 
    <h1>Contact page</h1>
    @include('includes.header')
    <form action="{{route('contact-form') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">•</label>
            <input type="text" name="name" placeholder="Name" id="name">
        </div>
    
        <div class="form-group">
            <label for="email">•</label>
            <input type="text" name="email" placeholder="example@mail.com" id="email">
        </div>
    
        <div class="form-group">
            <label for="Organization">•</label>
            <input type="text" name="name" placeholder="Your Company" id="organization">
        </div>
    
        <div class="form-group">
            <label for="name">•</label>
            <textarea name="message" id="message" placeholder="Write here..." cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Sent</button>
    </form>
    
    
@endsection    
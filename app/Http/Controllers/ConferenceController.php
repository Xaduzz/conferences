<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConferenceRequest;
use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function submit(ConferenceRequest $request){
        // $validation = $request->validate([
        //     'name' => 'required',
        //     'email'=> 'required|min:4|max:50',
        //     'message' => 'required|max:150'
        // ]);
 
        $conference = new Conference();
        $conference -> title = $request ->input('title');
        $conference -> photolink = $request ->input('photolink');
        $conference -> content = $request ->input('content');
 
        $conference -> save();
 
        return redirect()->route('home')->with('success','Message sent successfully!');
     }

     public function allData(){
        $conference=new Conference;
        return view('conferences',['data'=>$conference->all()]);
    }
}

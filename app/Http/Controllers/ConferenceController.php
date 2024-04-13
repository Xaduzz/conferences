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

    public function oneConference($id){
        $conference=new Conference;
        return view('one-conference',['data'=>$conference->find($id)]);
    }

    public function updateConference($id){
        $conference=new Conference;
        return view('update-conference',['data'=>$conference->find($id)]);
    }

    public function updateConferenceSubmit($id, ConferenceRequest $request){
        // $validation = $request->validate([
        //     'name' => 'required',
        //     'email'=> 'required|min:4|max:50',
        //     'message' => 'required|max:150'
        // ]);
 
        $conference = Conference::find($id);
        $conference -> title = $request ->input('title');
        $conference -> photolink = $request ->input('photolink');
        $conference -> content = $request ->input('content');
 
        $conference -> save();
 
        return redirect()->route('home')->with('success','Conference updated successfully!');
     }

     public function deleteConference($id){
        Conference::find($id)->delete();
        return redirect()->route('conference-data')->with('success','Conference deleted successfully!');
     }
}

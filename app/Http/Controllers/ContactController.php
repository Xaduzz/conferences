<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request){
       // $validation = $request->validate([
       //     'name' => 'required',
       //     'email'=> 'required|min:4|max:50',
       //     'message' => 'required|max:150'
       // ]);

       $contact = new Contact();
       $contact -> name = $request ->input('name');
       $contact -> email = $request ->input('email');
       $contact -> company = $request ->input('company');
       $contact -> message = $request ->input('message');

       $contact -> save();

       return redirect()->route('mainpage')->with('success','Message sent successfully!');
    }

    public function allData(){
        $contact=new Contact;
        return view('messages',['data'=>$contact->all()]);
    }

    public function oneMessage($id){
        $contact=new Contact;
        return view('one-message',['data'=>$contact->find($id)]);
    }

    public function updateMessage($id){
        $contact=new Contact;
        return view('update-message',['data'=>$contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $request){
        // $validation = $request->validate([
        //     'name' => 'required',
        //     'email'=> 'required|min:4|max:50',
        //     'message' => 'required|max:150'
        // ]);
 
        $contact = Contact::find($id);
        $contact -> name = $request ->input('name');
        $contact -> email = $request ->input('email');
        $contact -> company = $request ->input('company');
        $contact -> message = $request ->input('message');
 
        $contact -> save();
 
        return redirect()->route('contact-data-one',$id)->with('success','Message updated successfully!');
     }

     public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success','Message deleted successfully!');
     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $request){
       // $validation = $request->validate([
       //     'name' => 'required',
       //     'email'=> 'required|min:4|max:50',
       //     'message' => 'required|max:150'
       // ]);
    }
}

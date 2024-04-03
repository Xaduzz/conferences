<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //pakeisti veliau i false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return 
            [
                'name' => 'required',
                'email'=> 'required|min:4|max:50|email',
                'message' => 'required|max:150'
            ];
    }

    public function messages(){
        return [
            'name.required'=>"Name is required!",
            'email.required'=>"Email is required!",
            'message.required'=>'Message can not be empty!',
            'email.email' => 'Please enter valid email adress!'
        ];
    }
}

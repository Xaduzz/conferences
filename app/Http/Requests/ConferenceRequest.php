<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class ConferenceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required',
            'content'=>'required',
            'photolink'=>'required'
        ];
    }
    public function messages(){
        return [
            'title.required'=>"Name is required!",
            'content.required'=>"Email is required!",
            'photolink.required'=>"Photo is required!"
        ];
    }
}

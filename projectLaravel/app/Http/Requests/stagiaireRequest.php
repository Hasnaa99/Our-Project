<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class stagiaireRequest extends FormRequest
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
            'nom'=>'required|min:3',
            'prenom'=>'required',
            'age'=>'required|integer',
            'email'=>'required|email',
            'filiere'=>'required',
            'image'=>'image|mimes:png,jpg,svg|max:10240',
            'password'=>'min:9|max:50|confirmed'
        ];
    }
}

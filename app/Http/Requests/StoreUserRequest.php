<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'age' => 'required|max:255',
            'email' => 'required|max:255|email:rfc,dns|unique:users',
            'password' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'En nombre es obligatorio',
            'lastname.required' => 'El apellido es obligatorio',
        ];
    }

    public function attributes()
    {
        return [
            'age' => 'edad',
        ];
    }
}

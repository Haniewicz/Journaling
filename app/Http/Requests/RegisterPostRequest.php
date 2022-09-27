<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPostRequest extends FormRequest
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
            'name' => 'required|unique:users|max:20|min:2',
            'email' => 'required|max:50|email',
            'password' => 'required|min:5|max:30|confirmed',
            'password_confirmation' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nazwa użytkownika',
            'email' => 'email',
            'password' => 'hasło',
            'password_confirmation' => 'potwierdź hasło'
        ];
    }
}

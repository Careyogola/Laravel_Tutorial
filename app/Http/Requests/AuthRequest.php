<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password;


class AuthRequest extends FormRequest
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
            //
            'name'=> ['required','string', 'max:255'],
            'email' => ['required','email','max:255', 'unique:users'],
            'password'=> ['required', 'string',Password::min(8)->mixedCase()->numbers()->symbols()],
        ];
    }
}

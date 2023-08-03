<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
        'name' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'country' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'gender' => 'required|string|in:male,female',
        'hobbies' => 'required|array',
        
        ];
    }
}

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

// class RegisterRequest extends FormRequest
// {
//     public function rules()
//     {
//         return [
//             'name' => 'required', 'string', 'max:255',
//             'lastname' => ['required', 'string', 'max:255'],
//             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//             'password' => ['required', 'confirmed', \Illuminate\Validation\Rules\Password::defaults()],
            
//         ];
//     }
// }

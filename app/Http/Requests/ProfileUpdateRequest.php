<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'lastname' => ['string', 'max:255'],
            'country' => ['string', 'max:255'],
             'state' => ['string', 'max:255'],
        'gender' => [ 'string', 'in:male,female'],
        'hobbies' => [ 'array'],
        'hobbies.*' => ['string', 'max:255'],
        ];
    }
}

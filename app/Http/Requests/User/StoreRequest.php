<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => ['required', 'min:5', 'max:50'],
            'email' => ['required', 'email', 'unique:users,email'],
            'role' => ['required'],
            'txtPlace' => ['required'],
            'password' => ['required', 'confirmed', 'min:8', 'max:50'],
            'password_confirmation' => ['required']
        ];
    }
}

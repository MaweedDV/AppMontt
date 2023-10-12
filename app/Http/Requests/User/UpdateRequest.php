<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'first_name' => ['required', 'min:5', 'max:50'],
            'last_name' => ['required', 'min:5', 'max:50'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->id)],
            'rut' => ['required', 'min:5', 'max:50', Rule::unique('users', 'rut')->ignore($this->id)],
            'department_id' => ['required', 'exists:departments,id'],
            'role' => ['required'],
            'txtPlace' => ['nullable'],
            'password' => ['nullable', 'confirmed', 'min:8', 'max:50'],
            'password_confirmation' => ['nullable']
        ];
    }
}

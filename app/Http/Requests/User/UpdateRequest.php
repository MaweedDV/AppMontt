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
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->id)],
            'rut' => ['required', 'cl_rut', Rule::unique('users', 'rut')->ignore($this->id)],
            'department_id' => ['required'],
            'role' => ['required'],
            'id_places' => ['required'],
            'password' => ['nullable', 'confirmed', 'min:8', 'max:50'],
            'password_confirmation' => ['nullable']
        ];
    }
}

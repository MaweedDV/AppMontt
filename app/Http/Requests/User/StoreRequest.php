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
            'first_name' => ['required', 'min:5', 'max:50'],
            'last_name' => ['required', 'min:5', 'max:50'],
            'rut' => ['required', 'min:5', 'max:50', 'unique:users,rut'],
            'department_id' => ['required', 'exists:departments,id'],
            'email' => ['required', 'email', 'unique:users,email'],
            'role' => ['required'],
            'id_places' => ['required'],
            'password' => ['required', 'confirmed', 'min:8', 'max:50'],
            'password_confirmation' => ['required']
        ];
    }
}

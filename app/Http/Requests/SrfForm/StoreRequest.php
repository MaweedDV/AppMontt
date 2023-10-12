<?php

namespace App\Http\Requests\SrfForm;

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
            'date_attention' => ['required'],
            'hour_attention' => ['required'],
            'email' => ['required',  'email'],
            'phone' => ['required', 'min:8', 'max:50'],
            'address' => ['required'],
            'place_job' => ['required'],
            'type_procedure' => ['required'],
            'area_attention' => ['required'],
            'observation' => ['required', 'max:350']
        ];
    }
}

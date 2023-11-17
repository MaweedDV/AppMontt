<?php

namespace App\Http\Requests\Survey;

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
            'date_attention' => ['required'],
            'juridic_quality' => ['required'],
            'escale' => ['required'],
            'age_range' => ['required'],
            'genre' => ['required'],
            'years_antiquity' => ['required'],
            'place_job' => ['required'],
            'a8' => ['required'],
            'a9' => ['required', 'max:500'],
            'a10' => ['required'],
            'a11' => ['required'],
            'a12' => ['required'],
            'a13' => ['required'],
            'a14' => ['required'],
            'a15' => ['required'],
            'a16' => ['required'],
            'a17' => ['max:1000'],
            'a18' => ['required'],
            'a19' => ['required'],
            'a20' => ['required'],
            'a21' => ['required'],
            'a22' => ['required'],
            'a23' => ['max:1000'],//-> respuesta opcional
        ];
    }
}

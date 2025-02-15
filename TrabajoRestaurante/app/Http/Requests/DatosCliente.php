<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatosCliente extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'phone' => [
                'required',
                'regex:/^[6789]\d{8}$/'
            ],
            'card' => [
                'required',
                'regex:/^\d{13,19}$/'
            ],
            'name' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'phone.required' => 'El teléfono es obligatorio',
            'phone.regex' => 'El teléfono debe tener 9 dígitos y empezar por 6, 7, 8 o 9',
            'card.required' => 'La tarjeta es obligatoria',
            'card.regex' => 'La tarjeta debe tener entre 13 y 19 dígitos',
            'name.required' => 'El nombre es obligatorio'
        ];
    }
}

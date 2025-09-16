<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "valor" => "required",
            "unidade" => "required",
            "data_hora" => "required"
        ];
    }

    public function messages()
    {
        return [
            'valor.required' => "Campo obrigatório",
            'unidade.required' => "Campo obrigatório",
            'data_hora.required' => "Campo obrigatório"
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreAccountRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'plataforma'  => 'required|string|max:255',
            'categoria'   => 'nullable|string|max:255',
            'usuario'     => 'nullable|string',
            'email'       => 'nullable|email|max:255',
            'password'    => 'sometimes|string',
            'url_acceso'  => 'nullable|url',
            'descripcion' => 'nullable|string',
            'es_activa'   => 'nullable|boolean'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCardRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'banco'             => 'sometimes|string|max:255',
            'nombre_tarjeta'    => 'sometimes|string|max:255',
            'titular'           => 'sometimes|string|max:255',
            'franquicia'        => 'sometimes|string|in:Visa,Mastercard,Amex,Otros',
            'tarjeta_numero'    => 'sometimes|digits:16',
            'fecha_vencimiento' => 'sometimes|regex:/^(0[1-9]|1[0-2])\/[0-9]{4}$/',
            'cvv'               => 'sometimes|digits_between:3,4',
            'notas'             => 'nullable|string'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDiscusionEspecRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'titulo_en' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string',
            'descripcion_en' => 'nullable|string',
            'orden' => 'required|integer|min:0',
        ];
    }
}

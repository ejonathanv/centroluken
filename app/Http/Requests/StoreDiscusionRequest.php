<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class StoreDiscusionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'fecha' => 'required|date',
            'descripcion' => 'nullable|string',
            'resumen' => 'nullable|string',
            'foto_portada' => 'nullable|image',
            'pdf_file' => 'nullable|file|mimes:pdf|max:51200',
            'mostrar_solo_pdf' => 'sometimes|boolean',
        ];
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator) {
            $soloPdf = $this->boolean('mostrar_solo_pdf');
            if ($soloPdf && ! $this->hasFile('pdf_file')) {
                $validator->errors()->add('pdf_file', 'Para mostrar solo el PDF debes subir un archivo PDF.');
            }
        });
    }
}

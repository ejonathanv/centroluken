<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class UpdateDiscusionRequest extends FormRequest
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
            'remove_pdf' => 'sometimes|boolean',
        ];
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator) {
            $discusion = $this->route('discusion');
            $soloPdf = $this->boolean('mostrar_solo_pdf');
            $removingPdf = $this->boolean('remove_pdf');
            $hadPdf = (bool) $discusion->pdf_path;
            $willHavePdf = $hadPdf && ! $removingPdf || $this->hasFile('pdf_file');

            if ($soloPdf && ! $willHavePdf) {
                $validator->errors()->add('mostrar_solo_pdf', 'Para mostrar solo el PDF debe existir un archivo PDF (sube uno o no elimines el actual).');
            }
        });
    }
}

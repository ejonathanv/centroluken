<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOpinionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:500',
            'body' => 'required|string',
            'url' => 'nullable|url|max:2048',
            'cover_image' => 'nullable|image',
            'remove_cover' => 'sometimes|boolean',
        ];
    }
}

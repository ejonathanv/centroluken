<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOpinionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:500',
            'title_en' => 'nullable|string|max:500',
            'body' => 'required|string',
            'body_en' => 'nullable|string',
            'url' => 'nullable|url|max:2048',
            'cover_image' => 'nullable|image',
        ];
    }
}

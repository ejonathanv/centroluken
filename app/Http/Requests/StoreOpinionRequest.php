<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\ValidatesOpinionHomepage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class StoreOpinionRequest extends FormRequest
{
    use ValidatesOpinionHomepage;

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
            'author' => 'nullable|string|max:255',
            'date_published' => 'nullable|date',
            'on_homepage' => 'sometimes|boolean',
            'position' => 'nullable|integer|in:1,2,3',
        ];
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator) {
            $this->validateOpinionHomepage($validator);
        });
    }
}

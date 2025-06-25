<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTopicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description' => 'nullable|string',
            'description_en' => 'nullable|string',
            'url' => 'nullable|url|max:255',
            'source' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'published_at' => 'required|date',
            'category_id' => 'required_without:new_category|exists:topi_categories,id',
            'new_category' => 'required_without:category_id|string|max:255|nullable',
            'new_category_en' => 'required_with:new_category|string|max:255|nullable',
            'type' => 'required|in:article,PDF',
            'pdf_file' => 'nullable|file|mimes:pdf|max:10240', // opcional en actualización, máximo 10MB
        ];
    }
}

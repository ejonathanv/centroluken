<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
            'title' => 'required|string|max:255|unique:articles,title,' . $this->route('article')->id,
            'title_en' => 'required|string|max:255|unique:articles,title_en,' . $this->route('article')->id,
            'excerpt' => 'required|string|max:255',
            'excerpt_en' => 'required|string|max:255',
            'body' => 'required|string',
            'body_en' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'cover' => 'nullable|image',
            'published' => 'required|in:1,2',
            'published_at' => 'required|date',
        ];
    }
}

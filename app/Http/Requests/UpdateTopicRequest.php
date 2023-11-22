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
            'title' => 'required',
            'title_en' => 'required',
            'category_id' => 'nullable|exists:topi_categories,id|required_without:new_category',
            'new_category' => 'nullable|string',
            'new_category_en' => 'nullable|string|required_with:new_category',
            'description' => 'nullable',
            'description_en' => 'nullable',
            'url' => 'required',
            'source' => 'required',
            'author' => 'nullable',
            'published_at' => 'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,webp|max:2048',
            'heading' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required',
            'about_title' => 'required|string|max:255',
            'about_description' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_keyword' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'client_website' => 'nullable|url',
        ];
    }
}

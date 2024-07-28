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
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'image' => 'required|file|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required|string',
            'url' => 'required|url',
            'team' => 'required|string',
            'github' => 'required|url',
            'status' => 'required|integer',
            'client' => 'required|string|max:255',
            'date' => 'required|date',
        ];
    }
}

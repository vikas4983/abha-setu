<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewsCreateRequest extends FormRequest
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
            'title' => ['required', 'string', Rule::unique('news', 'title')->ignore($this->route('news'))],
            'description' => ['nullable', 'string'],
            'file' => ['nullable', 'file', 'mimes:pdf'],
            'status' => ['required', 'in:1,0'],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        return $validator;
    }
}

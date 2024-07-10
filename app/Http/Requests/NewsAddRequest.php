<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsAddRequest extends FormRequest
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
            'name' => 'required|min:3',
            'subject' => 'required|min:6',
            'news' => 'required|min:12',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Haberinizin Adı Zorunludur !',
            'name.min' => 'Haberinizin Adı Minimum 3 karakterden olmalıdır.',
            'subject.required' => 'Haberinizin konusu zorunludur !',
            'subject.min' => 'Haberinizin konusu minumum 6 karakterden oluşmalıdır.',
            'news.required' => 'Haberinizin içeriği Zorunludur !',
            'news.min' => 'Haberinizin içeriği minumum 12 karakterden oluşmalıdır.',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMessageRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'email' => 'required|email|min:3',
            'subject' => 'required|min:6',
            'message' => 'required|min:12',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'İsim Soyisim Zorunlu',
            'name.string' => 'İsim Soyisim Karakterlerden oluşmalı',
            'name.min' => 'İsim Soyisim Minimum 6 karakterden olmalıdır.',
            'email.required' => 'E-posta zorunlu',
            'email.email' => 'Geçersiz bir email adresi',
            'email.min' => 'E-posta Minimum 6 karakterden olmalıdır.',
            'subject.required' => 'Konu Zorunludur !',
            'subject.min' => 'Konu Minimum 6 karakterden olmalıdır.',
            'message.required' => 'Mesaj Zorunludur !',
            'message.min' => 'Mesaj Minimum 12 karakterden olmalıdır.',
        ];
    }
}

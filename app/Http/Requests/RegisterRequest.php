<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|min:6',
            'email' => 'required|unique:users|email|min:6',
            'password' => 'required|confirmed|min:6',
            'phone' => 'required|min:3',
            'age' => 'required|min:2',
            'job' => 'required|min:3',
            'country' => 'required|min:3',
            'city' => 'required|min:3',
            'company' => 'required|min:3',
            'school' => 'required|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'İsim Soyisim Zorunlu',
            'name.string' => 'İsim Soyisim Karakterlerden oluşmalı',
            'name.min' => 'İsim Soyisim Minimum 6 karakterden olmalıdır.',
            'email.required' => 'E-posta zorunlu',
            'email.unique' => 'E-posta zaten kayıtlı ',
            'email.email' => 'Geçersiz bir email adresi',
            'email.min' => 'E-posta Minimum 6 karakterden olmalıdır.',
            'password.required' => 'Şifre Zorunludur !',
            'password.confirmed' => 'Şifreler yanlış yazıldığı için onaylanmıyor',
            'password.min' => 'Şifre Minimum 6 karakterden olmalıdır.',
            'phone.required' => 'Telefon Zorunludur !',
            'phone.min' => 'Telefon Minimum 3 karakterden olmalıdır.',
            'age.required' => 'Yaş Zorunludur !',
            'age.min' => 'Yaş Minimum 2 karakterden olmalıdır.',
            'job.required' => 'Meslek Zorunludur !',
            'job.min' => 'Meslek Minimum 3 karakterden olmalıdır.',
            'country.required' => 'Ülke Zorunludur !',
            'country.min' => 'Ülke Minimum 3 karakterden olmalıdır.',
            'city.required' => 'ŞEhir Zorunludur !',
            'city.min' => 'ŞEhir Minimum 3 karakterden olmalıdır.',
            'company.required' => 'Şirket Zorunludur !',
            'company.min' => 'Şirket Minimum 3 karakterden olmalıdır.',
            'school.required' => 'Okul Zorunludur !',
            'school.min' => 'Okul Minimum 3 karakterden olmalıdır.',

        ];
    }
}

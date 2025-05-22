<?php

namespace App\Http\Requests\Petugas;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreatePetugasRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'nip' => ['required', 'string', 'size:16', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages(): array
    {
        return [
          'name.required' => 'Nama wajib diisi.',
          'email.required' => 'Email wajib diisi.',
          'email.lowercase' => 'Email harus huruf kecil.',
          'email.email' => 'Format email tidak valid.',
          'email.max' => 'Email maksimal 255 karakter.',
          'email.unique' => 'Email sudah terdaftar.',
          'nip.required' => 'NIP wajib diisi.',
          'nip.size' => 'NIP harus 16 karakter.',
          'nip.unique' => 'NIP sudah terdaftar.',
          'password.required' => 'Password wajib diisi.',
          'password.confirmed' => 'Password tidak cocok.',
          'password.min' => 'Password minimal 8 karakter.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        toast('Periksa kembali data anda.', 'error')->hideCloseButton()->autoClose(3000);

        throw new HttpResponseException(
            redirect()->back()->withErrors($validator)->withInput()
        );
    }
}

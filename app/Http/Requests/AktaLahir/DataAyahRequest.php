<?php

namespace App\Http\Requests\AktaLahir;

use Illuminate\Foundation\Http\FormRequest;

class DataAyahRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'da_nik' => 'required|digits:16',
            'da_nama_lengkap' => 'required|string|min:3',
            'da_tanggal_lahir' => 'required|date|before:today',
            'da_alamat' => 'required|string|min:3',
            'da_umur' => 'required|numeric',
            'da_kelurahan' => 'required|string|min:3',
            'da_kecamatan' => 'required|string|min:3',
            'da_kabupaten' => 'required|string|min:3',
            'da_provinsi' => 'required|string|min:3',
            'da_alamat' => 'required|string|min:3',
            'da_kewarganegaraan' => 'required|string|min:3',
            'da_kebangsaan' => 'nullable|string|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            'da_nik.required' => 'NIK wajib diisi.',
            'da_nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'da_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'da_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'da_tanggal_lahir.date' => 'Tanggal lahir harus berupa tanggal.',
            'da_tanggal_lahir.before' => 'Tanggal lahir harus di sebelum hari ini.',
            'da_alamat.required' => 'Alamat wajib diisi.',
            'da_umur.required' => 'Umur wajib diisi.',
            'da_kelurahan.required' => 'Kelurahan wajib diisi.',
            'da_kecamatan.required' => 'Kecamatan wajib diisi.',
            'da_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'da_provinsi.required' => 'Provinsi wajib diisi.',
            'da_alamat.required' => 'Alamat wajib diisi.',
            'da_kewarganegaraan.required' => 'Kewarganegaraan wajib diisi.',
        ];
    }
}

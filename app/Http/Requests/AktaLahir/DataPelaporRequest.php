<?php

namespace App\Http\Requests\AktaLahir;

use Illuminate\Foundation\Http\FormRequest;

class DataPelaporRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dp_nik' => 'required|digits:16',
            'dp_nama_lengkap' => 'required|string|min:3',
            'dp_tanggal_lahir' => 'required|date|before:today',
            'dp_tempat_lahir' => 'required|string|min:3',
            'dp_alamat' => 'required|string|min:3',
            'dp_umur' => 'required|numeric',
            'dp_kelurahan' => 'required|string|min:3',
            'dp_kecamatan' => 'required|string|min:3',
            'dp_kabupaten' => 'required|string|min:3',
            'dp_provinsi' => 'required|string|min:3',
            'dp_alamat' => 'required|string|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            'dp_nik.required' => 'NIK wajib diisi.',
            'dp_nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'dp_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'dp_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'dp_tanggal_lahir.date' => 'Tanggal lahir harus berupa tanggal.',
            'dp_tanggal_lahir.before' => 'Tanggal lahir harus di sebelum hari ini.',
            'dp_tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'dp_alamat.required' => 'Alamat wajib diisi.',
            'dp_umur.required' => 'Umur wajib diisi.',
            'dp_kelurahan.required' => 'Kelurahan wajib diisi.',
            'dp_kecamatan.required' => 'Kecamatan wajib diisi.',
            'dp_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'dp_provinsi.required' => 'Provinsi wajib diisi.',
            'dp_alamat.required' => 'Alamat wajib diisi.',
        ];
    }
}

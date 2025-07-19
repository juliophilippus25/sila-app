<?php

namespace App\Http\Requests\AktaLahir;

use Illuminate\Foundation\Http\FormRequest;

class DataSaksiRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // saksi 1
            'ds_1_nik' => 'required|digits:16',
            'ds_1_nama_lengkap' => 'required|string|min:3',
            'ds_1_tanggal_lahir' => 'required|date|before:today',
            'ds_1_tempat_lahir' => 'required|string|min:3',
            'ds_1_alamat' => 'required|string|min:3',
            'ds_1_umur' => 'required|numeric',
            'ds_1_kelurahan' => 'required|string|min:3',
            'ds_1_kecamatan' => 'required|string|min:3',
            'ds_1_kabupaten' => 'required|string|min:3',
            'ds_1_provinsi' => 'required|string|min:3',
            'ds_1_alamat' => 'required|string|min:3',

            // saksi 2
            'ds_2_nik' => 'required|digits:16',
            'ds_2_nama_lengkap' => 'required|string|min:3',
            'ds_2_tanggal_lahir' => 'required|date|before:today',
            'ds_2_tempat_lahir' => 'required|string|min:3',
            'ds_2_alamat' => 'required|string|min:3',
            'ds_2_umur' => 'required|numeric',
            'ds_2_kelurahan' => 'required|string|min:3',
            'ds_2_kecamatan' => 'required|string|min:3',
            'ds_2_kabupaten' => 'required|string|min:3',
            'ds_2_provinsi' => 'required|string|min:3',
            'ds_2_alamat' => 'required|string|min:3',
        ];
    }

    public function messages(): array {
        return [
            // saksi 1
            'ds_1_nik.required' => 'NIK wajib diisi.',
            'ds_1_nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'ds_1_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'ds_1_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'ds_1_tanggal_lahir.date' => 'Tanggal lahir harus berupa tanggal.',
            'ds_1_tanggal_lahir.before' => 'Tanggal lahir harus di sebelum hari ini.',
            'ds_1_tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'ds_1_alamat.required' => 'Alamat wajib diisi.',
            'ds_1_umur.required' => 'Umur wajib diisi.',
            'ds_1_kelurahan.required' => 'Kelurahan wajib diisi.',
            'ds_1_kecamatan.required' => 'Kecamatan wajib diisi.',
            'ds_1_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'ds_1_provinsi.required' => 'Provinsi wajib diisi.',
            'ds_1_alamat.required' => 'Alamat wajib diisi.',

            // saksi 2
            'ds_2_nik.required' => 'NIK wajib diisi.',
            'ds_2_nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'ds_2_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'ds_2_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'ds_2_tanggal_lahir.date' => 'Tanggal lahir harus berupa tanggal.',
            'ds_2_tanggal_lahir.before' => 'Tanggal lahir harus di sebelum hari ini.',
            'ds_2_tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'ds_2_alamat.required' => 'Alamat wajib diisi.',
            'ds_2_umur.required' => 'Umur wajib diisi.',
            'ds_2_kelurahan.required' => 'Kelurahan wajib diisi.',
            'ds_2_kecamatan.required' => 'Kecamatan wajib diisi.',
            'ds_2_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'ds_2_provinsi.required' => 'Provinsi wajib diisi.',
            'ds_2_alamat.required' => 'Alamat wajib diisi.',
        ];
    }
}

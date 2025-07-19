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
            'ds_1.nik' => 'required|digits:16',
            'ds_1.nama_lengkap' => 'required|string|min:3',
            'ds_1.tanggal_lahir' => 'required|date|before:today',
            'ds_1.alamat' => 'required|string|min:3',
            'ds_1.umur' => 'required|numeric',
            'ds_1.kelurahan' => 'required|string|min:3',
            'ds_1.kecamatan' => 'required|string|min:3',
            'ds_1.kabupaten' => 'required|string|min:3',
            'ds_1.provinsi' => 'required|string|min:3',
            'ds_1.alamat' => 'required|string|min:3',

            // saksi 2
            'ds_2.nik' => 'required|digits:16',
            'ds_2.nama_lengkap' => 'required|string|min:3',
            'ds_2.tanggal_lahir' => 'required|date|before:today',
            'ds_2.alamat' => 'required|string|min:3',
            'ds_2.umur' => 'required|numeric',
            'ds_2.kelurahan' => 'required|string|min:3',
            'ds_2.kecamatan' => 'required|string|min:3',
            'ds_2.kabupaten' => 'required|string|min:3',
            'ds_2.provinsi' => 'required|string|min:3',
            'ds_2.alamat' => 'required|string|min:3',
        ];
    }

    public function messages(): array {
        return [
            // saksi 1
            'ds_1.nik.required' => 'NIK wajib diisi.',
            'ds_1.nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'ds_1.nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'ds_1.tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'ds_1.tanggal_lahir.date' => 'Tanggal lahir harus berupa tanggal.',
            'ds_1.tanggal_lahir.before' => 'Tanggal lahir harus di sebelum hari ini.',
            'ds_1.alamat.required' => 'Alamat wajib diisi.',
            'ds_1.umur.required' => 'Umur wajib diisi.',
            'ds_1.kelurahan.required' => 'Kelurahan wajib diisi.',
            'ds_1.kecamatan.required' => 'Kecamatan wajib diisi.',
            'ds_1.kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'ds_1.provinsi.required' => 'Provinsi wajib diisi.',
            'ds_1.alamat.required' => 'Alamat wajib diisi.',

            // saksi 2
            'ds_2.nik.required' => 'NIK wajib diisi.',
            'ds_2.nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'ds_2.nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'ds_2.tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'ds_2.tanggal_lahir.date' => 'Tanggal lahir harus berupa tanggal.',
            'ds_2.tanggal_lahir.before' => 'Tanggal lahir harus di sebelum hari ini.',
            'ds_2.alamat.required' => 'Alamat wajib diisi.',
            'ds_2.umur.required' => 'Umur wajib diisi.',
            'ds_2.kelurahan.required' => 'Kelurahan wajib diisi.',
            'ds_2.kecamatan.required' => 'Kecamatan wajib diisi.',
            'ds_2.kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'ds_2.provinsi.required' => 'Provinsi wajib diisi.',
            'ds_2.alamat.required' => 'Alamat wajib diisi.',
        ];
    }
}

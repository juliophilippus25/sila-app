<?php

namespace App\Http\Requests\AktaLahir;

use Illuminate\Foundation\Http\FormRequest;

class DataIbuRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'di_nik' => 'required|digits:16',
            'di_nama_lengkap' => 'required|string|min:3',
            'di_tanggal_lahir' => 'required|date|before:today',
            'di_alamat' => 'required|string|min:3',
            'di_umur' => 'required|numeric',
            'di_kelurahan' => 'required|string|min:3',
            'di_kecamatan' => 'required|string|min:3',
            'di_kabupaten' => 'required|string|min:3',
            'di_provinsi' => 'required|string|min:3',
            'di_alamat' => 'required|string|min:3',
            'di_kewarganegaraan' => 'required|string|min:3',
            'di_kebangsaan' => 'nullable|string|min:3',
            'di_pencatatan_perkawinan' => 'nullable|date|before:today',
        ];
    }

    public function messages(): array
    {
        return [
            'di_nik.required' => 'NIK wajib diisi.',
            'di_nik.digits' => 'NIK harus terdiri diri 16 digit.',
            'di_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'di_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'di_tanggal_lahir.date' => 'Tanggal lahir harus berupa tanggal.',
            'di_tanggal_lahir.before' => 'Tanggal lahir harus di sebelum hari ini.',
            'di_alamat.required' => 'Alamat wajib diisi.',
            'di_umur.required' => 'Umur wajib diisi.',
            'di_kelurahan.required' => 'Kelurahan wajib diisi.',
            'di_kecamatan.required' => 'Kecamatan wajib diisi.',
            'di_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'di_provinsi.required' => 'Provinsi wajib diisi.',
            'di_alamat.required' => 'Alamat wajib diisi.',
            'di_kewarganegaraan.required' => 'Kewarganegaraan wajib diisi.',
            'di_pencatatan_perkawinan.date' => 'Tanggal pencatatan perkawinan harus berupa tanggal.',
            'di_pencatatan_perkawinan.before' => 'Tanggal pencatatan perkawinan harus di sebelum hari ini.',
        ];
    }
}

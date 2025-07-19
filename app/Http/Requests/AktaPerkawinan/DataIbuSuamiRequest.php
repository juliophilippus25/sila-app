<?php

namespace App\Http\Requests\AktaPerkawinan;

use Illuminate\Foundation\Http\FormRequest;

class DataIbuSuamiRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dids_nik' => 'required|digits:16|unique:perkawinan_ibu_suamis,nik,',
            'dids_nama_lengkap' => 'required|string|min:3',
            'dids_tanggal_lahir' => 'required|date|before:today',
            'dids_tempat_lahir' => 'required|string|min:3',
            'dids_alamat' => 'required|string|min:3',
            'dids_rt' => 'required|numeric|digits_between:1,3',
            'dids_rw' => 'required|numeric|digits_between:1,3',
            'dids_kode_pos' => 'required|numeric|digits:5',
            'dids_telepon' => 'required|string|min:9',
            'dids_kelurahan' => 'required|string|min:3',
            'dids_kecamatan' => 'required|string|min:3',
            'dids_kabupaten' => 'required|string|min:3',
            'dids_provinsi' => 'required|string|min:3',
            'dids_agama' => 'required|string',
            'dids_organisasi_penghayat' => 'nullable|string|min:3',
            'dids_pekerjaan' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            // required
            'dids_nik.unique' => 'NIK sudah terdaftar.',
            'dids_nik.required' => 'NIK wajib diisi.',
            'dids_nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'dids_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'dids_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'dids_tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'dids_rt.required' => 'RT wajib diisi.',
            'dids_rw.required' => 'RW wajib diisi.',
            'dids_kecamatan.required' => 'Kecamatan wajib diisi.',
            'dids_kelurahan.required' => 'Kelurahan wajib diisi.',
            'dids_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'dids_provinsi.required' => 'Provinsi wajib diisi.',
            'dids_alamat.required' => 'Alamat wajib diisi.',
            'dids_kode_pos.required' => 'Kode pos wajib diisi.',
            'dids_telepon.required' => 'Nomor telepon wajib diisi.',
            'dids_agama.required' => 'Agama wajib diisi.',
            'dids_pekerjaan.required' => 'Pekerjaan wajib diisi.',

            // digits
            'dids_kode_pos.digits' => 'Kode pos harus terdiri dari 5 digit.',
            'dids_telepon.digits' => 'Nomor telepon harus terdiri dari 9 digit.',

            // numeric
            'dids_rt.numeric' => 'RT harus berupa angka.',
            'dids_rw.numeric' => 'RW harus berupa angka.',

            // string
            'dids_nama_lengkap.string' => 'Nama lengkap harus berupa string.',
            'dids_tempat_lahir.string' => 'Tempat lahir harus berupa string.',
            'dids_alamat.string' => 'Alamat harus berupa string.',
            'dids_rt.string' => 'RT harus berupa string.',
            'dids_rw.string' => 'RW harus berupa string.',
            'dids_kode_pos.string' => 'Kode pos harus berupa string.',
            'dids_telepon.string' => 'Nomor telepon harus berupa string.',

            // min
            'dids_nama_lengkap.min' => 'Nama lengkap minimal dari 3 karakter.',
            'dids_tempat_lahir.min' => 'Tempat lahir minimal dari 3 karakter.',
            'dids_alamat.min' => 'Alamat minimal dari 3 karakter.',
            'dids_telepon.min' => 'Nomor telepon minimal dari 9 karakter.',
            'dids_kelurahan.min' => 'Kelurahan minimal dari 3 karakter.',
            'dids_kecamatan.min' => 'Kecamatan minimal dari 3 karakter.',
            'dids_kabupaten.min' => 'Kabupaten/Kota minimal dari 3 karakter.',
            'dids_provinsi.min' => 'Provinsi minimal dari 3 karakter.',
            'dids_organisasi_penghayat.min' => 'Organisasi penghayat minimal dari 3 karakter.',

            // date
            'dids_tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',

            // before
            'dids_tanggal_lahir.before' => 'Tanggal lahir tidak boleh melebihi tanggal sekarang.',
        ];
    }
}

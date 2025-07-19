<?php

namespace App\Http\Requests\AktaPerkawinan;

use Illuminate\Foundation\Http\FormRequest;

class DataAyahIstriRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dadi_nik' => 'required|digits:16|unique:perkawinan_ayah_istris,nik,',
            'dadi_nama_lengkap' => 'required|string|min:3',
            'dadi_tanggal_lahir' => 'required|date|before:today',
            'dadi_tempat_lahir' => 'required|string|min:3',
            'dadi_alamat' => 'required|string|min:3',
            'dadi_rt' => 'required|numeric|digits_between:1,3',
            'dadi_rw' => 'required|numeric|digits_between:1,3',
            'dadi_kode_pos' => 'required|numeric|digits:5',
            'dadi_telepon' => 'required|string|min:9',
            'dadi_kelurahan' => 'required|string|min:3',
            'dadi_kecamatan' => 'required|string|min:3',
            'dadi_kabupaten' => 'required|string|min:3',
            'dadi_provinsi' => 'required|string|min:3',
            'dadi_agama' => 'required|string',
            'dadi_organisasi_penghayat' => 'nullable|string|min:3',
            'dadi_pekerjaan' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            // required
            'dadi_nik.required' => 'NIK wajib diisi.',
            'dadi_nik.unique' => 'NIK sudah terdaftar.',
            'dadi_nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'dadi_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'dadi_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'dadi_tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'dadi_rt.required' => 'RT wajib diisi.',
            'dadi_rw.required' => 'RW wajib diisi.',
            'dadi_kecamatan.required' => 'Kecamatan wajib diisi.',
            'dadi_kelurahan.required' => 'Kelurahan wajib diisi.',
            'dadi_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'dadi_provinsi.required' => 'Provinsi wajib diisi.',
            'dadi_alamat.required' => 'Alamat wajib diisi.',
            'dadi_kode_pos.required' => 'Kode pos wajib diisi.',
            'dadi_telepon.required' => 'Nomor telepon wajib diisi.',
            'dadi_agama.required' => 'Agama wajib diisi.',
            'dadi_pekerjaan.required' => 'Pekerjaan wajib diisi.',

            // digits
            'dadi_kode_pos.digits' => 'Kode pos harus terdiri dari 5 digit.',
            'dadi_telepon.digits' => 'Nomor telepon harus terdiri dari 9 digit.',

            // numeric
            'dadi_rt.numeric' => 'RT harus berupa angka.',
            'dadi_rw.numeric' => 'RW harus berupa angka.',

            // string
            'dadi_nama_lengkap.string' => 'Nama lengkap harus berupa string.',
            'dadi_tempat_lahir.string' => 'Tempat lahir harus berupa string.',
            'dadi_alamat.string' => 'Alamat harus berupa string.',
            'dadi_rt.string' => 'RT harus berupa string.',
            'dadi_rw.string' => 'RW harus berupa string.',
            'dadi_kode_pos.string' => 'Kode pos harus berupa string.',
            'dadi_telepon.string' => 'Nomor telepon harus berupa string.',

            // min
            'dadi_nama_lengkap.min' => 'Nama lengkap minimal dari 3 karakter.',
            'dadi_tempat_lahir.min' => 'Tempat lahir minimal dari 3 karakter.',
            'dadi_alamat.min' => 'Alamat minimal dari 3 karakter.',
            'dadi_teleponn.min' => 'Nomor telepon minimal dari 9 karakter.',
            'dadi_kelurahan.min' => 'Kelurahan minimal dari 3 karakter.',
            'dadi_kecamatan.min' => 'Kecamatan minimal dari 3 karakter.',
            'dadi_kabupaten.min' => 'Kabupaten/Kota minimal dari 3 karakter.',
            'dadi_provinsi.min' => 'Provinsi minimal dari 3 karakter.',
            'dadi_organisasi_penghayat.min' => 'Organisasi penghayat minimal dari 3 karakter.',

            // date
            'dadi_tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',

            // before
            'dadi_tanggal_lahir.before' => 'Tanggal lahir tidak boleh melebihi tanggal sekarang.',
        ];
    }
}

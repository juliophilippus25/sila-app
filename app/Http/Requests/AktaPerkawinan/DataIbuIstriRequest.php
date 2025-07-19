<?php

namespace App\Http\Requests\AktaPerkawinan;

use Illuminate\Foundation\Http\FormRequest;

class DataIbuIstriRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'didi_nik' => 'required|digits:16|unique:perkawinan_ibu_istris,nik,',
            'didi_nama_lengkap' => 'required|string|min:3',
            'didi_tanggal_lahir' => 'required|date|before:today',
            'didi_tempat_lahir' => 'required|string|min:3',
            'didi_alamat' => 'required|string|min:3',
            'didi_rt' => 'required|numeric|digits_between:1,3',
            'didi_rw' => 'required|numeric|digits_between:1,3',
            'didi_kode_pos' => 'required|numeric|digits:5',
            'didi_telepon' => 'required|string|min:9',
            'didi_kelurahan' => 'required|string|min:3',
            'didi_kecamatan' => 'required|string|min:3',
            'didi_kabupaten' => 'required|string|min:3',
            'didi_provinsi' => 'required|string|min:3',
            'didi_agama' => 'required|string',
            'didi_organisasi_penghayat' => 'nullable|string|min:3',
            'didi_pekerjaan' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            // required
            'didi_nik.unique' => 'NIK sudah terdaftar.',
            'didi_nik.required' => 'NIK wajib diisi.',
            'didi_nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'didi_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'didi_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'didi_tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'didi_rt.required' => 'RT wajib diisi.',
            'didi_rw.required' => 'RW wajib diisi.',
            'didi_kecamatan.required' => 'Kecamatan wajib diisi.',
            'didi_kelurahan.required' => 'Kelurahan wajib diisi.',
            'didi_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'didi_provinsi.required' => 'Provinsi wajib diisi.',
            'didi_alamat.required' => 'Alamat wajib diisi.',
            'didi_kode_pos.required' => 'Kode pos wajib diisi.',
            'didi_telepon.required' => 'Nomor telepon wajib diisi.',
            'didi_agama.required' => 'Agama wajib diisi.',
            'didi_pekerjaan.required' => 'Pekerjaan wajib diisi.',

            // digits
            'didi_kode_pos.digits' => 'Kode pos harus terdiri dari 5 digit.',
            'didi_telepon.digits' => 'Nomor telepon harus terdiri dari 9 digit.',

            // numeric
            'didi_rt.numeric' => 'RT harus berupa angka.',
            'didi_rw.numeric' => 'RW harus berupa angka.',

            // string
            'didi_nama_lengkap.string' => 'Nama lengkap harus berupa string.',
            'didi_tempat_lahir.string' => 'Tempat lahir harus berupa string.',
            'didi_alamat.string' => 'Alamat harus berupa string.',
            'didi_rt.string' => 'RT harus berupa string.',
            'didi_rw.string' => 'RW harus berupa string.',
            'didi_kode_pos.string' => 'Kode pos harus berupa string.',
            'didi_telepon.string' => 'Nomor telepon harus berupa string.',

            // min
            'didi_nama_lengkap.min' => 'Nama lengkap minimal dari 3 karakter.',
            'didi_tempat_lahir.min' => 'Tempat lahir minimal dari 3 karakter.',
            'didi_alamat.min' => 'Alamat minimal dari 3 karakter.',
            'didi_telepon.min' => 'Nomor telepon minimal dari 9 karakter.',
            'didi_kelurahan.min' => 'Kelurahan minimal dari 3 karakter.',
            'didi_kecamatan.min' => 'Kecamatan minimal dari 3 karakter.',
            'didi_kabupaten.min' => 'Kabupaten/Kota minimal dari 3 karakter.',
            'didi_provinsi.min' => 'Provinsi minimal dari 3 karakter.',
            'didi_organisasi_penghayat.min' => 'Organisasi penghayat minimal dari 3 karakter.',

            // date
            'didi_tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',

            // before
            'didi_tanggal_lahir.before' => 'Tanggal lahir tidak boleh melebihi tanggal sekarang.',
        ];
    }
}

<?php

namespace App\Http\Requests\AktaPerkawinan;

use Illuminate\Foundation\Http\FormRequest;

class DataAyahSuamiRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dads_nik' => 'required|digits:16',
            'dads_nomor_kk' => 'required|digits:16',
            'dads_nama_lengkap' => 'required|string|min:3',
            'dads_tanggal_lahir' => 'required|date|before:today',
            'dads_tempat_lahir' => 'required|string|min:3',
            'dads_alamat' => 'required|string|min:3',
            'dads_rt' => 'required|numeric|digits_between:1,3',
            'dads_rw' => 'required|numeric|digits_between:1,3',
            'dads_kode_pos' => 'required|numeric|digits:5',
            'dads_telepon' => 'required|string|min:9',
            'dads_kelurahan' => 'required|string|min:3',
            'dads_kecamatan' => 'required|string|min:3',
            'dads_kabupaten' => 'required|string|min:3',
            'dads_provinsi' => 'required|string|min:3',
            'dads_pendidikan_terakhir' => 'required|string',
            'dads_agama' => 'required|string',
            'dads_organisasi_penghayat' => 'nullable|string|min:3',
            'dads_pekerjaan' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            // required
            'dads_nik.required' => 'NIK wajib diisi.',
            'dads_nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'dads_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'dads_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'dads_tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'dads_rt.required' => 'RT wajib diisi.',
            'dads_rw.required' => 'RW wajib diisi.',
            'dads_kecamatan.required' => 'Kecamatan wajib diisi.',
            'dads_kelurahan.required' => 'Kelurahan wajib diisi.',
            'dads_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'dads_provinsi.required' => 'Provinsi wajib diisi.',
            'dads_alamat.required' => 'Alamat wajib diisi.',
            'dads_kode_pos.required' => 'Kode pos wajib diisi.',
            'dads_telepon.required' => 'Nomor telepon wajib diisi.',
            'dads_pendidikan_terakhir.required' => 'Pendidikan terakhir wajib diisi.',
            'dads_agama.required' => 'Agama wajib diisi.',
            'dads_pekerjaan.required' => 'Pekerjaan wajib diisi.',

            // digits
            'dads_nomor_kk.digits' => 'Nomor KK harus terdiri dari 16 digit.',
            'dads_kode_pos.digits' => 'Kode pos harus terdiri dari 5 digit.',
            'dads_telepon.digits' => 'Nomor telepon harus terdiri dari 9 digit.',

            // numeric
            'dads_rt.numeric' => 'RT harus berupa angka.',
            'dads_rw.numeric' => 'RW harus berupa angka.',

            // string
            'dads_nomor_kk.string' => 'Nomor KK harus berupa string.',
            'dads_nomor_paspor.string' => 'Nomor paspor harus berupa string.',
            'dads_nama_lengkap.string' => 'Nama lengkap harus berupa string.',
            'dads_tempat_lahir.string' => 'Tempat lahir harus berupa string.',
            'dads_alamat.string' => 'Alamat harus berupa string.',
            'dads_rt.string' => 'RT harus berupa string.',
            'dads_rw.string' => 'RW harus berupa string.',
            'dads_kode_pos.string' => 'Kode pos harus berupa string.',
            'dads_telepon.string' => 'Nomor telepon harus berupa string.',

            // min
            'dads_nomor_paspor.min' => 'Nomor paspor minimal dari 3 karakter.',
            'dads_nama_lengkap.min' => 'Nama lengkap minimal dari 3 karakter.',
            'dads_tempat_lahir.min' => 'Tempat lahir minimal dari 3 karakter.',
            'dads_alamat.min' => 'Alamat minimal dari 3 karakter.',
            'dads_teleponn.min' => 'Nomor telepon minimal dari 9 karakter.',
            'dads_kelurahan.min' => 'Kelurahan minimal dari 3 karakter.',
            'dads_kecamatan.min' => 'Kecamatan minimal dari 3 karakter.',
            'dads_kabupaten.min' => 'Kabupaten/Kota minimal dari 3 karakter.',
            'dads_provinsi.min' => 'Provinsi minimal dari 3 karakter.',
            'dads_organisasi_penghayat.min' => 'Organisasi penghayat minimal dari 3 karakter.',

            // date
            'dads_tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',

            // before
            'dads_tanggal_lahir.before' => 'Tanggal lahir tidak boleh melebihi tanggal sekarang.',
        ];
    }
}

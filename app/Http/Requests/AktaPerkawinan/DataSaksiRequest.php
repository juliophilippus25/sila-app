<?php

namespace App\Http\Requests\AktaPerkawinan;

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
            'ds_1_nomor_kk' => 'required|digits:16',
            'ds_1_nama_lengkap' => 'required|string|min:3',
            'ds_1_tanggal_lahir' => 'required|date|before:today',
            'ds_1_tempat_lahir' => 'required|string|min:3',
            'ds_1_alamat' => 'required|string|min:3',
            'ds_1_rt' => 'required|numeric|digits_between:1,3',
            'ds_1_rw' => 'required|numeric|digits_between:1,3',
            'ds_1_kode_pos' => 'required|numeric|digits:5',
            'ds_1_telepon' => 'required|string|min:9',
            'ds_1_kelurahan' => 'required|string|min:3',
            'ds_1_kecamatan' => 'required|string|min:3',
            'ds_1_kabupaten' => 'required|string|min:3',
            'ds_1_provinsi' => 'required|string|min:3',
            'ds_1_pendidikan_terakhir' => 'required|string',
            'ds_1_agama' => 'required|string',
            'ds_1_organisasi_penghayat' => 'nullable|string|min:3',
            'ds_1_pekerjaan' => 'required|string',

            // saksi 2
            'ds_2_nik' => 'required|digits:16',
            'ds_2_nomor_kk' => 'required|digits:16',
            'ds_2_nama_lengkap' => 'required|string|min:3',
            'ds_2_tanggal_lahir' => 'required|date|before:today',
            'ds_2_tempat_lahir' => 'required|string|min:3',
            'ds_2_alamat' => 'required|string|min:3',
            'ds_2_rt' => 'required|numeric|digits_between:1,3',
            'ds_2_rw' => 'required|numeric|digits_between:1,3',
            'ds_2_kode_pos' => 'required|numeric|digits:5',
            'ds_2_telepon' => 'required|string|min:9',
            'ds_2_kelurahan' => 'required|string|min:3',
            'ds_2_kecamatan' => 'required|string|min:3',
            'ds_2_kabupaten' => 'required|string|min:3',
            'ds_2_provinsi' => 'required|string|min:3',
            'ds_2_pendidikan_terakhir' => 'required|string',
            'ds_2_agama' => 'required|string',
            'ds_2_organisasi_penghayat' => 'nullable|string|min:3',
            'ds_2_pekerjaan' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            // saksi 1
            // required
            'ds_1_nik.required' => 'NIK wajib diisi.',
            'ds_1_nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'ds_1_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'ds_1_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'ds_1_tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'ds_1_rt.required' => 'RT wajib diisi.',
            'ds_1_rw.required' => 'RW wajib diisi.',
            'ds_1_kecamatan.required' => 'Kecamatan wajib diisi.',
            'ds_1_kelurahan.required' => 'Kelurahan wajib diisi.',
            'ds_1_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'ds_1_provinsi.required' => 'Provinsi wajib diisi.',
            'ds_1_alamat.required' => 'Alamat wajib diisi.',
            'ds_1_kode_pos.required' => 'Kode pos wajib diisi.',
            'ds_1_telepon.required' => 'Nomor telepon wajib diisi.',
            'ds_1_pendidikan_terakhir.required' => 'Pendidikan terakhir wajib diisi.',
            'ds_1_agama.required' => 'Agama wajib diisi.',
            'ds_1_pekerjaan.required' => 'Pekerjaan wajib diisi.',

            // digits
            'ds_1_nomor_kk.digits' => 'Nomor KK harus terdiri dari 16 digit.',
            'ds_1_kode_pos.digits' => 'Kode pos harus terdiri dari 5 digit.',
            'ds_1_telepon.digits' => 'Nomor telepon harus terdiri dari 9 digit.',

            // numeric
            'ds_1_rt.numeric' => 'RT harus berupa angka.',
            'ds_1_rw.numeric' => 'RW harus berupa angka.',

            // string
            'ds_1_nomor_kk.string' => 'Nomor KK harus berupa string.',
            'ds_1_nomor_paspor.string' => 'Nomor paspor harus berupa string.',
            'ds_1_nama_lengkap.string' => 'Nama lengkap harus berupa string.',
            'ds_1_tempat_lahir.string' => 'Tempat lahir harus berupa string.',
            'ds_1_alamat.string' => 'Alamat harus berupa string.',
            'ds_1_rt.string' => 'RT harus berupa string.',
            'ds_1_rw.string' => 'RW harus berupa string.',
            'ds_1_kode_pos.string' => 'Kode pos harus berupa string.',
            'ds_1_telepon.string' => 'Nomor telepon harus berupa string.',

            // min
            'ds_1_nomor_paspor.min' => 'Nomor paspor minimal dari 3 karakter.',
            'ds_1_nama_lengkap.min' => 'Nama lengkap minimal dari 3 karakter.',
            'ds_1_tempat_lahir.min' => 'Tempat lahir minimal dari 3 karakter.',
            'ds_1_alamat.min' => 'Alamat minimal dari 3 karakter.',
            'ds_1_teleponn.min' => 'Nomor telepon minimal dari 9 karakter.',
            'ds_1_kelurahan.min' => 'Kelurahan minimal dari 3 karakter.',
            'ds_1_kecamatan.min' => 'Kecamatan minimal dari 3 karakter.',
            'ds_1_kabupaten.min' => 'Kabupaten/Kota minimal dari 3 karakter.',
            'ds_1_provinsi.min' => 'Provinsi minimal dari 3 karakter.',
            'ds_1_organisasi_penghayat.min' => 'Organisasi penghayat minimal dari 3 karakter.',

            // date
            'ds_1_tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',

            // before
            'ds_1_tanggal_lahir.before' => 'Tanggal lahir tidak boleh melebihi tanggal sekarang.',

            // saksi 2
            // required
            'ds_2_nik.required' => 'NIK wajib diisi.',
            'ds_2_nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'ds_2_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'ds_2_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'ds_2_tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'ds_2_rt.required' => 'RT wajib diisi.',
            'ds_2_rw.required' => 'RW wajib diisi.',
            'ds_2_kecamatan.required' => 'Kecamatan wajib diisi.',
            'ds_2_kelurahan.required' => 'Kelurahan wajib diisi.',
            'ds_2_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'ds_2_provinsi.required' => 'Provinsi wajib diisi.',
            'ds_2_alamat.required' => 'Alamat wajib diisi.',
            'ds_2_kode_pos.required' => 'Kode pos wajib diisi.',
            'ds_2_telepon.required' => 'Nomor telepon wajib diisi.',
            'ds_2_pendidikan_terakhir.required' => 'Pendidikan terakhir wajib diisi.',
            'ds_2_agama.required' => 'Agama wajib diisi.',
            'ds_2_pekerjaan.required' => 'Pekerjaan wajib diisi.',

            // digits
            'ds_2_nomor_kk.digits' => 'Nomor KK harus terdiri dari 16 digit.',
            'ds_2_kode_pos.digits' => 'Kode pos harus terdiri dari 5 digit.',
            'ds_2_telepon.digits' => 'Nomor telepon harus terdiri dari 9 digit.',

            // numeric
            'ds_2_rt.numeric' => 'RT harus berupa angka.',
            'ds_2_rw.numeric' => 'RW harus berupa angka.',

            // string
            'ds_2_nomor_kk.string' => 'Nomor KK harus berupa string.',
            'ds_2_nomor_paspor.string' => 'Nomor paspor harus berupa string.',
            'ds_2_nama_lengkap.string' => 'Nama lengkap harus berupa string.',
            'ds_2_tempat_lahir.string' => 'Tempat lahir harus berupa string.',
            'ds_2_alamat.string' => 'Alamat harus berupa string.',
            'ds_2_rt.string' => 'RT harus berupa string.',
            'ds_2_rw.string' => 'RW harus berupa string.',
            'ds_2_kode_pos.string' => 'Kode pos harus berupa string.',
            'ds_2_telepon.string' => 'Nomor telepon harus berupa string.',

            // min
            'ds_2_nomor_paspor.min' => 'Nomor paspor minimal dari 3 karakter.',
            'ds_2_nama_lengkap.min' => 'Nama lengkap minimal dari 3 karakter.',
            'ds_2_tempat_lahir.min' => 'Tempat lahir minimal dari 3 karakter.',
            'ds_2_alamat.min' => 'Alamat minimal dari 3 karakter.',
            'ds_2_teleponn.min' => 'Nomor telepon minimal dari 9 karakter.',
            'ds_2_kelurahan.min' => 'Kelurahan minimal dari 3 karakter.',
            'ds_2_kecamatan.min' => 'Kecamatan minimal dari 3 karakter.',
            'ds_2_kabupaten.min' => 'Kabupaten/Kota minimal dari 3 karakter.',
            'ds_2_provinsi.min' => 'Provinsi minimal dari 3 karakter.',
            'ds_2_organisasi_penghayat.min' => 'Organisasi penghayat minimal dari 3 karakter.',

            // date
            'ds_2_tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',

            // before
            'ds_2_tanggal_lahir.before' => 'Tanggal lahir tidak boleh melebihi tanggal sekarang.',
        ];
    }
}

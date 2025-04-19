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
            'ds_1.nik' => 'required|digits:16',
            'ds_1.nama_lengkap' => 'required|string|min:3',
            'ds_1.tanggal_lahir' => 'required|date|before:today',
            'ds_1.tempat_lahir' => 'required|string|min:3',
            'ds_1.alamat' => 'required|string|min:3',
            'ds_1.rt' => 'required|numeric|digits_between:1,3',
            'ds_1.rw' => 'required|numeric|digits_between:1,3',
            'ds_1.kode_pos' => 'required|numeric|digits:5',
            'ds_1.telepon' => 'required|string|min:9',
            'ds_1.kelurahan' => 'required|string|min:3',
            'ds_1.kecamatan' => 'required|string|min:3',
            'ds_1.kabupaten' => 'required|string|min:3',
            'ds_1.provinsi' => 'required|string|min:3',
            'ds_1.agama' => 'required|string',
            'ds_1.organisasi_penghayat' => 'nullable|string|min:3',
            'ds_1.pekerjaan' => 'required|string',

            // saksi 2
            'ds_2.nik' => 'required|digits:16',
            'ds_2.nama_lengkap' => 'required|string|min:3',
            'ds_2.tanggal_lahir' => 'required|date|before:today',
            'ds_2.tempat_lahir' => 'required|string|min:3',
            'ds_2.alamat' => 'required|string|min:3',
            'ds_2.rt' => 'required|numeric|digits_between:1,3',
            'ds_2.rw' => 'required|numeric|digits_between:1,3',
            'ds_2.kode_pos' => 'required|numeric|digits:5',
            'ds_2.telepon' => 'required|string|min:9',
            'ds_2.kelurahan' => 'required|string|min:3',
            'ds_2.kecamatan' => 'required|string|min:3',
            'ds_2.kabupaten' => 'required|string|min:3',
            'ds_2.provinsi' => 'required|string|min:3',
            'ds_2.agama' => 'required|string',
            'ds_2.organisasi_penghayat' => 'nullable|string|min:3',
            'ds_2.pekerjaan' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            // saksi 1
            // required
            'ds_1.nik.required' => 'NIK wajib diisi.',
            'ds_1.nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'ds_1.nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'ds_1.tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'ds_1.tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'ds_1.rt.required' => 'RT wajib diisi.',
            'ds_1.rw.required' => 'RW wajib diisi.',
            'ds_1.kecamatan.required' => 'Kecamatan wajib diisi.',
            'ds_1.kelurahan.required' => 'Kelurahan wajib diisi.',
            'ds_1.kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'ds_1.provinsi.required' => 'Provinsi wajib diisi.',
            'ds_1.alamat.required' => 'Alamat wajib diisi.',
            'ds_1.kode_pos.required' => 'Kode pos wajib diisi.',
            'ds_1.telepon.required' => 'Nomor telepon wajib diisi.',
            'ds_1.agama.required' => 'Agama wajib diisi.',
            'ds_1.pekerjaan.required' => 'Pekerjaan wajib diisi.',

            // digits
            'ds_1.nomor_kk.digits' => 'Nomor KK harus terdiri dari 16 digit.',
            'ds_1.kode_pos.digits' => 'Kode pos harus terdiri dari 5 digit.',
            'ds_1.telepon.digits' => 'Nomor telepon harus terdiri dari 9 digit.',

            // numeric
            'ds_1.rt.numeric' => 'RT harus berupa angka.',
            'ds_1.rw.numeric' => 'RW harus berupa angka.',

            // string
            'ds_1.nomor_kk.string' => 'Nomor KK harus berupa string.',
            'ds_1.nomor_paspor.string' => 'Nomor paspor harus berupa string.',
            'ds_1.nama_lengkap.string' => 'Nama lengkap harus berupa string.',
            'ds_1.tempat_lahir.string' => 'Tempat lahir harus berupa string.',
            'ds_1.alamat.string' => 'Alamat harus berupa string.',
            'ds_1.rt.string' => 'RT harus berupa string.',
            'ds_1.rw.string' => 'RW harus berupa string.',
            'ds_1.kode_pos.string' => 'Kode pos harus berupa string.',
            'ds_1.telepon.string' => 'Nomor telepon harus berupa string.',

            // min
            'ds_1.nomor_paspor.min' => 'Nomor paspor minimal dari 3 karakter.',
            'ds_1.nama_lengkap.min' => 'Nama lengkap minimal dari 3 karakter.',
            'ds_1.tempat_lahir.min' => 'Tempat lahir minimal dari 3 karakter.',
            'ds_1.alamat.min' => 'Alamat minimal dari 3 karakter.',
            'ds_1.teleponn.min' => 'Nomor telepon minimal dari 9 karakter.',
            'ds_1.kelurahan.min' => 'Kelurahan minimal dari 3 karakter.',
            'ds_1.kecamatan.min' => 'Kecamatan minimal dari 3 karakter.',
            'ds_1.kabupaten.min' => 'Kabupaten/Kota minimal dari 3 karakter.',
            'ds_1.provinsi.min' => 'Provinsi minimal dari 3 karakter.',
            'ds_1.organisasi_penghayat.min' => 'Organisasi penghayat minimal dari 3 karakter.',

            // date
            'ds_1.tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',

            // before
            'ds_1.tanggal_lahir.before' => 'Tanggal lahir tidak boleh melebihi tanggal sekarang.',

            // saksi 2
            // required
            'ds_2.nik.required' => 'NIK wajib diisi.',
            'ds_2.nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'ds_2.nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'ds_2.tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'ds_2.tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'ds_2.rt.required' => 'RT wajib diisi.',
            'ds_2.rw.required' => 'RW wajib diisi.',
            'ds_2.kecamatan.required' => 'Kecamatan wajib diisi.',
            'ds_2.kelurahan.required' => 'Kelurahan wajib diisi.',
            'ds_2.kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'ds_2.provinsi.required' => 'Provinsi wajib diisi.',
            'ds_2.alamat.required' => 'Alamat wajib diisi.',
            'ds_2.kode_pos.required' => 'Kode pos wajib diisi.',
            'ds_2.telepon.required' => 'Nomor telepon wajib diisi.',
            'ds_2.agama.required' => 'Agama wajib diisi.',
            'ds_2.pekerjaan.required' => 'Pekerjaan wajib diisi.',

            // digits
            'ds_2.nomor_kk.digits' => 'Nomor KK harus terdiri dari 16 digit.',
            'ds_2.kode_pos.digits' => 'Kode pos harus terdiri dari 5 digit.',
            'ds_2.telepon.digits' => 'Nomor telepon harus terdiri dari 9 digit.',

            // numeric
            'ds_2.rt.numeric' => 'RT harus berupa angka.',
            'ds_2.rw.numeric' => 'RW harus berupa angka.',

            // string
            'ds_2.nomor_kk.string' => 'Nomor KK harus berupa string.',
            'ds_2.nomor_paspor.string' => 'Nomor paspor harus berupa string.',
            'ds_2.nama_lengkap.string' => 'Nama lengkap harus berupa string.',
            'ds_2.tempat_lahir.string' => 'Tempat lahir harus berupa string.',
            'ds_2.alamat.string' => 'Alamat harus berupa string.',
            'ds_2.rt.string' => 'RT harus berupa string.',
            'ds_2.rw.string' => 'RW harus berupa string.',
            'ds_2.kode_pos.string' => 'Kode pos harus berupa string.',
            'ds_2.telepon.string' => 'Nomor telepon harus berupa string.',

            // min
            'ds_2.nomor_paspor.min' => 'Nomor paspor minimal dari 3 karakter.',
            'ds_2.nama_lengkap.min' => 'Nama lengkap minimal dari 3 karakter.',
            'ds_2.tempat_lahir.min' => 'Tempat lahir minimal dari 3 karakter.',
            'ds_2.alamat.min' => 'Alamat minimal dari 3 karakter.',
            'ds_2.teleponn.min' => 'Nomor telepon minimal dari 9 karakter.',
            'ds_2.kelurahan.min' => 'Kelurahan minimal dari 3 karakter.',
            'ds_2.kecamatan.min' => 'Kecamatan minimal dari 3 karakter.',
            'ds_2.kabupaten.min' => 'Kabupaten/Kota minimal dari 3 karakter.',
            'ds_2.provinsi.min' => 'Provinsi minimal dari 3 karakter.',
            'ds_2.organisasi_penghayat.min' => 'Organisasi penghayat minimal dari 3 karakter.',

            // date
            'ds_2.tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',

            // before
            'ds_2.tanggal_lahir.before' => 'Tanggal lahir tidak boleh melebihi tanggal sekarang.',
        ];
    }
}

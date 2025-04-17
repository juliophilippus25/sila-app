<?php

namespace App\Http\Requests\AktaPerkawinan;

use Illuminate\Foundation\Http\FormRequest;

class DataSuamiRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ds_nik' => 'required|digits:16',
            'ds_nomor_kk' => 'required|digits:16',
            'ds_nomor_paspor' => 'nullable|string|min:3',
            'ds_nama_lengkap' => 'required|string|min:3',
            'ds_tanggal_lahir' => 'required|date|before:today',
            'ds_tempat_lahir' => 'required|string|min:3',
            'ds_alamat' => 'required|string|min:3',
            'ds_rt' => 'required|numeric|digits_between:1,3',
            'ds_rw' => 'required|numeric|digits_between:1,3',
            'ds_kode_pos' => 'required|numeric|digits:5',
            'ds_telepon' => 'required|string|min:9',
            'ds_kelurahan' => 'required|string|min:3',
            'ds_kecamatan' => 'required|string|min:3',
            'ds_kabupaten' => 'required|string|min:3',
            'ds_provinsi' => 'required|string|min:3',
            'ds_pendidikan_terakhir' => 'required|string',
            'ds_agama' => 'required|string',
            'ds_organisasi_penghayat' => 'nullable|string|min:3',
            'ds_pekerjaan' => 'required|string',
            'ds_anak_ke' => 'required|numeric',
            'ds_status_perkawinan' => 'required|string',
            'ds_perkawinan_ke' => 'required|numeric',
            'ds_istri_ke' => 'nullable|numeric',
            'ds_kewarganegaraan' => 'required|string|min:3',
            'ds_kebangsaan' => 'nullable|string|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            // required
            'ds_nik.required' => 'NIK wajib diisi.',
            'ds_nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'ds_nomor_kk.required' => 'Nomor KK wajib diisi.',
            'ds_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'ds_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'ds_tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'ds_rt.required' => 'RT wajib diisi.',
            'ds_rw.required' => 'RW wajib diisi.',
            'ds_kecamatan.required' => 'Kecamatan wajib diisi.',
            'ds_kelurahan.required' => 'Kelurahan wajib diisi.',
            'ds_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'ds_provinsi.required' => 'Provinsi wajib diisi.',
            'ds_alamat.required' => 'Alamat wajib diisi.',
            'ds_kode_pos.required' => 'Kode pos wajib diisi.',
            'ds_telepon.required' => 'Nomor telepon wajib diisi.',
            'ds_anak_ke.required' => 'Anak ke wajib diisi.',
            'ds_perkawinan_ke.required' => 'Perkawinan ke wajib diisi.',
            'ds_pendidikan_terakhir.required' => 'Pendidikan terakhir wajib diisi.',
            'ds_agama.required' => 'Agama wajib diisi.',
            'ds_pekerjaan.required' => 'Pekerjaan wajib diisi.',
            'ds_status_perkawinan.required' => 'Status perkawinan wajib diisi.',
            'ds_kewarganegaraan.required' => 'Kewarganegaraan wajib diisi.',

            // digits
            'ds_nomor_kk.digits' => 'Nomor KK harus terdiri dari 16 digit.',
            'ds_nomor_paspor.digits' => 'Nomor paspor harus terdiri dari 16 digit.',
            'ds_kode_pos.digits' => 'Kode pos harus terdiri dari 5 digit.',
            'ds_telepon.digits' => 'Nomor telepon harus terdiri dari 9 digit.',

            // numeric
            'ds_rt.numeric' => 'RT harus berupa angka.',
            'ds_rw.numeric' => 'RW harus berupa angka.',
            'ds_anak_ke.numeric' => 'Anak ke harus berupa angka.',
            'ds_perkawinan_ke.numeric' => 'Perkawinan ke harus berupa angka.',
            'ds_istri_ke.numeric' => 'Istri ke harus berupa angka.',

            // string
            'ds_nomor_kk.string' => 'Nomor KK harus berupa string.',
            'ds_nomor_paspor.string' => 'Nomor paspor harus berupa string.',
            'ds_nama_lengkap.string' => 'Nama lengkap harus berupa string.',
            'ds_tempat_lahir.string' => 'Tempat lahir harus berupa string.',
            'ds_alamat.string' => 'Alamat harus berupa string.',
            'ds_rt.string' => 'RT harus berupa string.',
            'ds_rw.string' => 'RW harus berupa string.',
            'ds_kode_pos.string' => 'Kode pos harus berupa string.',
            'ds_telepon.string' => 'Nomor telepon harus berupa string.',

            // min
            'ds_nomor_paspor.min' => 'Nomor paspor minimal dari 3 karakter.',
            'ds_nama_lengkap.min' => 'Nama lengkap minimal dari 3 karakter.',
            'ds_tempat_lahir.min' => 'Tempat lahir minimal dari 3 karakter.',
            'ds_alamat.min' => 'Alamat minimal dari 3 karakter.',
            'ds_teleponn.min' => 'Nomor telepon minimal dari 9 karakter.',
            'ds_kelurahan.min' => 'Kelurahan minimal dari 3 karakter.',
            'ds_kecamatan.min' => 'Kecamatan minimal dari 3 karakter.',
            'ds_kabupaten.min' => 'Kabupaten/Kota minimal dari 3 karakter.',
            'ds_provinsi.min' => 'Provinsi minimal dari 3 karakter.',
            'ds_organisasi_penghayat.min' => 'Organisasi penghayat minimal dari 3 karakter.',
            'ds_kewarganegaraan.min' => 'Kewarganegaraan minimal dari 3 karakter.',
            'ds_kebangsaan.min' => 'Kebangsaan minimal dari 3 karakter.',

            // date
            'ds_tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',

            // before
            'ds_tanggal_lahir.before' => 'Tanggal lahir tidak boleh melebihi tanggal sekarang.',
        ];
    }
}

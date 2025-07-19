<?php

namespace App\Http\Requests\AktaPerkawinan;

use Illuminate\Foundation\Http\FormRequest;

class DataIstriRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'di_nik' => 'required|digits:16|unique:perkawinan_istris,nik,',
            'di_nomor_kk' => 'required|digits:16',
            'di_nomor_paspor' => 'nullable|string|min:3',
            'di_nama_lengkap' => 'required|string|min:3',
            'di_tanggal_lahir' => 'required|date|before:today',
            'di_tempat_lahir' => 'required|string|min:3',
            'di_alamat' => 'required|string|min:3',
            'di_rt' => 'required|numeric|digits_between:1,3',
            'di_rw' => 'required|numeric|digits_between:1,3',
            'di_kode_pos' => 'required|numeric|digits:5',
            'di_telepon' => 'required|string|min:9',
            'di_kelurahan' => 'required|string|min:3',
            'di_kecamatan' => 'required|string|min:3',
            'di_kabupaten' => 'required|string|min:3',
            'di_provinsi' => 'required|string|min:3',
            'di_pendidikan_terakhir' => 'required|string',
            'di_agama' => 'required|string',
            'di_organisasi_penghayat' => 'nullable|string|min:3',
            'di_pekerjaan' => 'required|string',
            'di_anak_ke' => 'required|numeric',
            'di_status_perkawinan' => 'required|string',
            'di_perkawinan_ke' => 'required|numeric',
            'di_kewarganegaraan' => 'required|string|min:3',
            'di_kebangsaan' => 'nullable|string|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            // required
            'di_nik.unique' => 'NIK sudah terdaftar.',
            'di_nik.required' => 'NIK wajib diisi.',
            'di_nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'di_nomor_kk.required' => 'Nomor KK wajib diisi.',
            'di_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'di_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'di_tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'di_rt.required' => 'RT wajib diisi.',
            'di_rw.required' => 'RW wajib diisi.',
            'di_kecamatan.required' => 'Kecamatan wajib diisi.',
            'di_kelurahan.required' => 'Kelurahan wajib diisi.',
            'di_kabupaten.required' => 'Kabupaten/Kota wajib diisi.',
            'di_provinsi.required' => 'Provinsi wajib diisi.',
            'di_alamat.required' => 'Alamat wajib diisi.',
            'di_kode_pos.required' => 'Kode pos wajib diisi.',
            'di_telepon.required' => 'Nomor telepon wajib diisi.',
            'di_anak_ke.required' => 'Anak ke wajib diisi.',
            'di_perkawinan_ke.required' => 'Perkawinan ke wajib diisi.',
            'di_pendidikan_terakhir.required' => 'Pendidikan terakhir wajib diisi.',
            'di_agama.required' => 'Agama wajib diisi.',
            'di_pekerjaan.required' => 'Pekerjaan wajib diisi.',
            'di_status_perkawinan.required' => 'Status perkawinan wajib diisi.',
            'di_kewarganegaraan.required' => 'Kewarganegaraan wajib diisi.',

            // digits
            'di_nomor_kk.digits' => 'Nomor KK harus terdiri dari 16 digit.',
            'di_nomor_paspor.digits' => 'Nomor paspor harus terdiri dari 16 digit.',
            'di_kode_pos.digits' => 'Kode pos harus terdiri dari 5 digit.',
            'di_telepon.digits' => 'Nomor telepon harus terdiri dari 9 digit.',

            // numeric
            'di_rt.numeric' => 'RT harus berupa angka.',
            'di_rw.numeric' => 'RW harus berupa angka.',
            'di_anak_ke.numeric' => 'Anak ke harus berupa angka.',
            'di_perkawinan_ke.numeric' => 'Perkawinan ke harus berupa angka.',

            // string
            'di_nomor_kk.string' => 'Nomor KK harus berupa string.',
            'di_nomor_paspor.string' => 'Nomor paspor harus berupa string.',
            'di_nama_lengkap.string' => 'Nama lengkap harus berupa string.',
            'di_tempat_lahir.string' => 'Tempat lahir harus berupa string.',
            'di_alamat.string' => 'Alamat harus berupa string.',
            'di_rt.string' => 'RT harus berupa string.',
            'di_rw.string' => 'RW harus berupa string.',
            'di_kode_pos.string' => 'Kode pos harus berupa string.',
            'di_telepon.string' => 'Nomor telepon harus berupa string.',

            // min
            'di_nomor_paspor.min' => 'Nomor paspor minimal dari 3 karakter.',
            'di_nama_lengkap.min' => 'Nama lengkap minimal dari 3 karakter.',
            'di_tempat_lahir.min' => 'Tempat lahir minimal dari 3 karakter.',
            'di_alamat.min' => 'Alamat minimal dari 3 karakter.',
            'di_teleponn.min' => 'Nomor telepon minimal dari 9 karakter.',
            'di_kelurahan.min' => 'Kelurahan minimal dari 3 karakter.',
            'di_kecamatan.min' => 'Kecamatan minimal dari 3 karakter.',
            'di_kabupaten.min' => 'Kabupaten/Kota minimal dari 3 karakter.',
            'di_provinsi.min' => 'Provinsi minimal dari 3 karakter.',
            'di_organisasi_penghayat.min' => 'Organisasi penghayat minimal dari 3 karakter.',
            'di_kewarganegaraan.min' => 'Kewarganegaraan minimal dari 3 karakter.',
            'di_kebangsaan.min' => 'Kebangsaan minimal dari 3 karakter.',

            // date
            'di_tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',

            // before
            'di_tanggal_lahir.before' => 'Tanggal lahir tidak boleh melebihi tanggal sekarang.',
        ];
    }
}

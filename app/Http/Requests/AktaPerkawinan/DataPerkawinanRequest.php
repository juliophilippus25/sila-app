<?php

namespace App\Http\Requests\AktaPerkawinan;

use Illuminate\Foundation\Http\FormRequest;

class DataPerkawinanRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dp_tanggal_pemberkatan_perkawinan' => 'required|date',
            'dp_tanggal_melapor' => 'required|date',
            'dp_pukul' => 'required',
            'dp_agama' => 'required|string',
            'dp_organisasi_penghayat' => 'nullable|string|min:3',
            'dp_nama_pemuka_agama' => 'required|string|min:3',
            'dp_nama_badan_peradilan' => 'required|string|min:3',
            'dp_nomor_putusan_pengadilan' => 'nullable|string|min:3',
            'dp_tanggal_putusan' => 'required|date',
            'dp_ijin_perwakilan' => 'nullable|string',
            'dp_jumlah_anak' => 'nullable|numeric|min:0',

            // Validasi anak[] yang berupa array of object
            'anak' => 'nullable|array',
            'anak.*.nama_anak' => 'nullable|string|min:3',
            'anak.*.no_akta' => 'nullable|string|min:3',
            'anak.*.tanggal_akta' => 'nullable|date',
        ];
    }

    public function messages(): array
    {
        return [
            // required
            'dp_tanggal_pemberkatan_perkawinan.required' => 'Tanggal pemberkatan perkawinan wajib diisi.',
            'dp_tanggal_melapor.required' => 'Tanggal melapor wajib diisi.',
            'dp_pukul.required' => 'Pukul wajib diisi.',
            'dp_agama.required' => 'Agama wajib diisi.',
            'dp_nama_pemuka_agama.required' => 'Nama pemuka agama wajib diisi.',
            'dp_nama_badan_peradilan.required' => 'Nama badan peradilan wajib diisi.',
            'dp_tanggal_putusan.required' => 'Tanggal putusan wajib diisi.',

            // date
            'tanggal_pemberkatan_perkawinan.date' => 'Format tanggal pemberkatan perkawinan tidak valid.',
            'dp_tanggal_melapor.date' => 'Format tanggal melapor tidak valid.',
            'dp_tanggal_putusan.date' => 'Format tanggal putusan tidak valid.',
            'anak.*.tanggal_akta.date' => 'Format tanggal akta anak tidak valid.',

            // min
            'dp_organisasi_penghayat.min' => 'Organisasi penghayat minimal 3 karakter.',
            'dp_nama_pemuka_agama.min' => 'Nama pemuka agama minimal 3 karakter.',
            'dp_nama_badan_peradilan.min' => 'Nama badan peradilan minimal 3 karakter.',
            'dp_nomor_putusan_pengadilan.min' => 'Nomor putusan pengadilan minimal 3 karakter.',
            'anak.*.nama_anak.min' => 'Nama anak minimal 3 karakter.',
            'anak.*.no_akta.min' => 'Nomor akta anak minimal 3 karakter.',
        ];
    }
}

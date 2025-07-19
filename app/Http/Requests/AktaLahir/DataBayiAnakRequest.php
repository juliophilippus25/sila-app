<?php

namespace App\Http\Requests\AktaLahir;

use Illuminate\Foundation\Http\FormRequest;

class DataBayiAnakRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dba_nama_lengkap' => 'required|string',
            'dba_jenis_kelamin' => 'required|string',
            'dba_tempat_dilahirkan' => 'required|string',
            'dba_tempat_kelahiran' => 'required|string',
            'dba_tanggal_lahir' => 'required|date|before:today',
            'dba_pukul' => 'required|string',
            'dba_jenis_kelahiran' => 'required|string',
            'dba_kelahiran_ke' => 'required|numeric',
            'dba_penolong_kelahiran' => 'required|string',
            'dba_berat_bayi' => 'required|numeric',
            'dba_panjang_bayi' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'dba_nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'dba_jenis_kelamin.required' => 'Jenis kelamin wajib diisi.',
            'dba_tempat_dilahirkan.required' => 'Tempat dilahirkan wajib diisi.',
            'dba_tempat_kelahiran.required' => 'Tempat kelahiran wajib diisi.',
            'dba_tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'dba_tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',
            'dba_tanggal_lahir.before' => 'Tanggal lahir tidak boleh melebihi tanggal sekarang.',
            'dba_pukul.required' => 'Pukul wajib diisi.',
            'dba_jenis_kelahiran.required' => 'Jenis kelahiran wajib diisi.',
            'dba_kelahiran_ke.required' => 'Kelahiran ke wajib diisi.',
            'dba_penolong_kelahiran.required' => 'Penolong kelahiran wajib diisi.',
            'dba_berat_bayi.required' => 'Berat bayi wajib diisi.',
            'dba_panjang_bayi.required' => 'Panjang bayi wajib diisi.',
        ];
    }
}

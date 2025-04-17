<?php

namespace App\Http\Requests\AktaPerkawinan;

use Illuminate\Foundation\Http\FormRequest;

class DataAdministrasiRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'persyaratan' => 'array',
            'persyaratan.*.persyaratan' => 'required|string',
            'persyaratan.*.file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'persyaratan.*.file.mimes' => 'File harus berupa jpg, jpeg, png, atau pdf.',
            'persyaratan.*.file.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
        ];
    }

    protected function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $persyaratanWajib = [
                'Fotocopy Surat Nikah Gereja / Vihara / Manakin / Penghayat Kepercayaan / Salinan Penetapan Pengadilan yang telah di Legalisir',
                'Fotocopy Kutipan Akta Kelahiran Suami Istri',
                'Surat Keterangan dari Desa/Kelurahan',
                'Fotocopy KTP Suami Istri dan Kartu Keluarga',
                'Pas Photo Berdampingan ukuran 4x6 cm sebanyak 3 (tiga) lembar',
                '2 (dua) orang saksi yang telah berusia 21 tahun keatas',
            ];

            if (is_array($this->persyaratan)) {
                foreach ($this->persyaratan as $index => $item) {
                    if (in_array($item['persyaratan'], $persyaratanWajib)) {
                        if (empty($item['file']) || !$item['file'] instanceof \Illuminate\Http\UploadedFile) {
                            $validator->errors()->add("persyaratan.$index.file", 'File untuk "' . $item['persyaratan'] . '" wajib diunggah.');
                        }
                    }
                }
            }
        });
    }
}

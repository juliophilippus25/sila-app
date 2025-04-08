<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerkawinanSuami extends Model
{
    protected $keyType = 'string';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'akta_perkawinan_id',
        'nik',
        'nomor_kk',
        'nomor_paspor',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'rt',
        'rw',
        'kode_pos',
        'telepon',
        'desa_kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'pendidikan_terakhir',
        'agama',
        'organisasi_penghayat',
        'pekerjaan',
        'anak_ke',
        'status_perkawinan',
        'perkawinan_ke',
        'istri_Ke',
        'kewarganegaraan',
        'kebangsaan'
    ];

    public function aktaPerkawinan()
    {
        return $this->belongsTo(AktaPerkawinan::class, 'akta_perkawinan_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerkawinanAyahSuami extends Model
{
    protected $keyType = 'string';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'akta_perkawinan_id',
        'nik',
        'nama_lengkap',
        'pendidikan_terakhir',
        'agama',
        'organisasi_penghayat',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'rt',
        'rw',
        'kode_pos',
        'telepon',
        'desa_kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'pekerjaan'
    ];

    public function aktaPerkawinan()
    {
        return $this->belongsTo(AktaPerkawinan::class, 'akta_perkawinan_id');
    }
}

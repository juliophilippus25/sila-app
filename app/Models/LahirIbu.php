<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LahirIbu extends Model
{
     protected $keyType = 'string';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    protected $fillable = [
        'id',
        'akta_lahir_id',
        'nik',
        'nama_lengkap',
        'tanggal_lahir',
        'umur',
        'pekerjaan',
        'desa_kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'alamat',
        'kewarganegaraan',
        'kebangsaan',
        'tanggal_pencatatan_perkawinan'
    ];

    public function aktaLahir()
    {
        return $this->belongsTo(AktaLahir::class, 'akta_lahir_id');
    }
}

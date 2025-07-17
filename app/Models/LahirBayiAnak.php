<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LahirBayiAnak extends Model
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
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_dilahirkan',
        'tempat_kelahiran',
        'tanggal_lahir',
        'pukul',
        'jenis_kelahiran',
        'kelahiran_ke',
        'penolong_kelahiran',
        'berat_bayi',
        'panjang_bayi'
    ];

    public function aktaLahir()
    {
        return $this->belongsTo(AktaLahir::class, 'akta_lahir_id');
    }
}

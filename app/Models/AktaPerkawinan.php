<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AktaPerkawinan extends Model
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
        'user_id',
        'petugas_id',
        'nomor_akta',
        'tanggal_akta',
        'tanggal_cetak',
        'status',
        'alasan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function petugas()
    {
        return $this->belongsTo(User::class);
    }

    public function perkawinanSuami()
    {
        return $this->hasOne(PerkawinanSuami::class, 'akta_perkawinan_id');
    }

    public function perkawinanAyahSuami()
    {
        return $this->hasOne(perkawinanAyahSuami::class, 'akta_perkawinan_id');
    }

    public function perkawinanIbuSuami()
    {
        return $this->hasOne(PerkawinanIbuSuami::class, 'akta_perkawinan_id');
    }

    public function perkawinanIstri()
    {
        return $this->hasOne(PerkawinanIstri::class, 'akta_perkawinan_id');
    }

    public function perkawinanAyahIstri()
    {
        return $this->hasOne(PerkawinanAyahIstri::class, 'akta_perkawinan_id');
    }

    public function perkawinanIbuIstri()
    {
        return $this->hasOne(PerkawinanIbuIstri::class, 'akta_perkawinan_id');
    }

    public function perkawinanSaksi()
    {
        return $this->hasOne(PerkawinanSaksi::class, 'akta_perkawinan_id');
    }

    public function perkawinanPerkawinan()
    {
        return $this->hasOne(PerkawinanPerkawinan::class, 'akta_perkawinan_id');
    }

    public function perkawinanAdministrasi()
    {
        return $this->hasOne(PerkawinanAdministrasi::class, 'akta_perkawinan_id');
    }
}

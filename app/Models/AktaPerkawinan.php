<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AktaPerkawinan extends Model
{
    protected $keyType = 'string';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'petugas_id',
        'nomor_akta',
        'tanggal_akta',
        'tanggal_cetak',
        'status'
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
        return $this->hasOne(perkawinanIbuSuami::class, 'akta_perkawinan_id');
    }

    public function perkawinanIstri()
    {
        return $this->hasOne(PerkawinanIstri::class, 'akta_perkawinan_id');
    }

    public function perkawinanAyahIstri()
    {
        return $this->hasOne(perkawinanAyahIstri::class, 'akta_perkawinan_id');
    }

    public function perkawinanIbuIstri()
    {
        return $this->hasOne(perkawinanIbuIstri::class, 'akta_perkawinan_id');
    }

    public function perkawinanSaksi()
    {
        return $this->hasOne(perkawinanSaksi::class, 'akta_perkawinan_id');
    }

    public function perkawinanPerkawinan()
    {
        return $this->hasOne(perkawinanPerkawinan::class, 'akta_perkawinan_id');
    }

    public function perkawinanAdministrasi()
    {
        return $this->hasOne(perkawinanAdministrasi::class, 'akta_perkawinan_id');
    }
}

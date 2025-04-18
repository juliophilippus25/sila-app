<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class PerkawinanPerkawinan extends Model
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
        'akta_perkawinan_id',
        'tanggal_pemberkatan_perkawinan',
        'tanggal_melapor',
        'pukul',
        'agama',
        'organisasi_penghayat',
        'nama_badan_peradilan',
        'nomor_putusan_pengadilan',
        'tanggal_putusan',
        'nama_pemuka_agama',
        'ijin_perwakilan',
        'jumlah_anak',
        'anak',
    ];

    protected $casts = [
        'anak' => 'array',
    ];

    public function aktaPerkawinan()
    {
        return $this->belongsTo(AktaPerkawinan::class, 'akta_perkawinan_id');
    }
}

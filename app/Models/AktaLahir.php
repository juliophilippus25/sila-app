<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AktaLahir extends Model
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

    public function lahirBayiAnak()
    {
        return $this->hasOne(LahirBayiAnak::class, 'akta_lahir_id');
    }

    public function lahirIbu()
    {
        return $this->hasOne(LahirIbu::class, 'akta_lahir_id');
    }

    public function lahirAyah()
    {
        return $this->hasOne(LahirAyah::class, 'akta_lahir_id');
    }

    public function lahirPelapor()
    {
        return $this->hasOne(LahirPelapor::class, 'akta_lahir_id');
    }
}

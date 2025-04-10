<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerkawinanAdministrasi extends Model
{
    protected $keyType = 'string';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'akta_perkawinan_id',
        'persyaratan',
    ];

    protected $casts = [
        'persyaratan' => 'array',
    ];

    public function aktaPerkawinan()
    {
        return $this->belongsTo(AktaPerkawinan::class, 'akta_perkawinan_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerkawinanSaksi extends Model
{
    protected $keyType = 'string';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'akta_perkawinan_id',
        'saksi_1',
        'saksi_2'
    ];

    protected $casts = [
        'saksi_1' => 'array',
        'saksi_2' => 'array'
    ];

    public function aktaPerkawinan()
    {
        return $this->belongsTo(AktaPerkawinan::class, 'akta_perkawinan_id');
    }
}

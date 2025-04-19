<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PerkawinanAdministrasi extends Model
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
        'persyaratan',
    ];

    protected $casts = [
        'persyaratan' => 'array',
    ];

    public function aktaPerkawinan()
    {
        return $this->belongsTo(AktaPerkawinan::class, 'akta_perkawinan_id');
    }

    public function deleteWithFiles()
    {
        $persyaratan = json_decode($this->persyaratan, true);

        if (is_array($persyaratan)) {
            foreach ($persyaratan as $item) {
                if (!empty($item['path']) && Storage::disk('public')->exists($item['path'])) {
                    Storage::disk('public')->delete($item['path']);
                }
            }
        }

        $this->delete();
    }

}

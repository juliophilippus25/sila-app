<?php

namespace App\Helpers;

use Carbon\Carbon;

class FormatTanggal
{
    public static function tglIndo($tanggal)
    {
        if (!$tanggal) return '-';
        return Carbon::parse($tanggal)->translatedFormat('d F Y');
    }

    public static function tglJamIndo($tanggal)
    {
        if (!$tanggal) return '-';
        return Carbon::parse($tanggal)->translatedFormat('d F Y H:i');
    }
}

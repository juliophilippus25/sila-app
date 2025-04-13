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

    public static function jamIndo($pukul)
    {
        if (!$pukul) return '-';

        Carbon::setLocale('id');

        return Carbon::parse($pukul)->translatedFormat('H:i');
    }
}

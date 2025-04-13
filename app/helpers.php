<?php

use App\Helpers\FormatTanggal;

if (!function_exists('tglIndo')) {
    function tglIndo($tanggal)
    {
        return FormatTanggal::tglIndo($tanggal);
    }
}

if (!function_exists('tglJamIndo')) {
    function tglJamIndo($tanggal)
    {
        return FormatTanggal::tglJamIndo($tanggal);
    }
}

if (!function_exists('jamIndo')) {
    function jamIndo($pukul)
    {
        return FormatTanggal::jamIndo($pukul);
    }
}

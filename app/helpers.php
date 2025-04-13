<?php

use App\Helpers\FormatTanggal;

if (!function_exists('tglIndo')) {
    function tglIndo($tanggal)
    {
        return FormatTanggal::tglIndo($tanggal);
    }
}

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

if (!function_exists('terbilang')) {
    function terbilang($angka)
    {
        $angka = abs($angka);
        $bilangan = [
            '', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan', 'Sepuluh', 'Sebelas'
        ];

        if ($angka < 12) {
            return $bilangan[$angka];
        } elseif ($angka < 20) {
            return terbilang($angka - 10) . ' Belas';
        } elseif ($angka < 100) {
            return terbilang($angka / 10) . ' Puluh ' . terbilang($angka % 10);
        } elseif ($angka < 200) {
            return 'Seratus ' . terbilang($angka - 100);
        } elseif ($angka < 1000) {
            return terbilang($angka / 100) . ' Ratus ' . terbilang($angka % 100);
        } elseif ($angka < 2000) {
            return 'Seribu ' . terbilang($angka - 1000);
        } elseif ($angka < 1000000) {
            return terbilang($angka / 1000) . ' Ribu ' . terbilang($angka % 1000);
        } else {
            return 'Angka terlalu besar';
        }
    }

}

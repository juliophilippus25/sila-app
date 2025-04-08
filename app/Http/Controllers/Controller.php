<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

abstract class Controller
{
    public function getPendidikanTerakhir() {
        return [
            'Tidak/Belum Sekolah' => 'Tidak/Belum Sekolah',
            'Belum Tamat' => 'Belum Tamat',
            'SD/Sederajat' => 'SD/Sederajat',
            'SLTP/Sederajat' => 'SLTP/Sederajat',
            'SLTA/Sederajat' => 'SLTA/Sederajat',
            'Diploma I/II' => 'Diploma I/II',
            'Akademi/Diploma III/S. Muda' => 'Akademi/Diploma III/S. Muda',
            'Diploma IV/Strata I' => 'Diploma IV/Strata I',
            'Strata II' => 'Strata II',
            'Strata III' => 'Strata III'
        ];
    }

    public function getAgama() {
        return [
            'Islam' => 'Islam',
            'Kristen' => 'Kristen',
            'Katholik' => 'Katholik',
            'Hindu' => 'Hindu',
            'Budha' => 'Budha',
            'Khonghucu' => 'Khonghucu',
            'Penghayat Kepercayaan' => 'Penghayat Kepercayaan',
            'Lainnya' => 'Lainnya'
        ];
    }

    public function getPekerjaan() {
        return [
            'Tidak Bekerja' => 'Tidak Bekerja',
            'Nelayan' => 'Nelayan',
            'Petani' => 'Petani',
            'Pegawai Negeri Sipil' => 'Pegawai Negeri Sipil',
            'Karyawan Swasta' => 'Karyawan Swasta',
            'Lainnya' => 'Lainnya'
        ];
    }

    public function getStatusPerkawinan() {
        return [
            'Belum Kawin' => 'Belum Kawin',
            'Kawin' => 'Kawin',
            'Cerai Hidup' => 'Cerai Hidup',
            'Cerai Mati' => 'Cerai Mati'
        ];
    }

    public function getKewarganegaraan() {
        return [
            'WNI' => 'WNI',
            'WNA' => 'WNA'
        ];
    }

    public function generateId() {
        return strtoupper(md5("!@#!@#" . Carbon::now()->format('YmdH:i:s')));
    }
}

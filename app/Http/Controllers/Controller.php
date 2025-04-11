<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;

abstract class Controller
{
    public function getPendidikanTerakhir() {
        return [
            'Tidak/Belum Sekolah' => 'Tidak/Belum Sekolah',
            'Belum Tamat SD' => 'Belum Tamat SD',
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
            'Katolik' => 'Katolik',
            'Hindu' => 'Hindu',
            'Budha' => 'Budha',
            'Konghucu' => 'Konghucu',
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
        return (string) Str::uuid();
    }
}

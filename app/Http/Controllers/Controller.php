<?php

namespace App\Http\Controllers;

use App\Models\AktaLahir;
use App\Models\AktaPerkawinan;
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

    public function getTempatLahir() {
        return [
            'RS/RB' => 'RS/RB',
            'Puskemas' => 'Puskesmas',
            'Polindes' => 'Polindes',
            'Rumah' => 'Rumah',
            'Lainnya' => 'Lainnya'
        ];
    }

    public function getJenisKelahiran() {
        return [
            'Tunggal' => 'Tunggal',
            'Kembar 2' => 'Kembar 2',
            'Kembar 3' => 'Kembar 3',
            'Kembar 4' => 'Kembar 4',
            'Lainnya' => 'Lainnya'
        ];
    }

    public function getPenolongKelahiran() {
        return [
            'Dokter' => 'Dokter',
            'Bidan/Perawat' => 'Bidan/Perawat',
            'Dukun' => 'Dukun',
            'Lainnya' => 'Lainnya'
        ];
    }

    public function getJenisKelamin() {
        return [
            'Laki-laki' => 'Laki-laki',
            'Perempuan' => 'Perempuan'
        ];
    }

    public function generateId() {
        return (string) Str::uuid();
    }

    public function generateNoAktaPerkawinan()
    {
        $prefix = 'AKTA-PERKAWINAN-';

        $lastAktaPerkawinan = AktaPerkawinan::where('id', 'like', '%')
            ->orderBy('id', 'desc')
            ->first();

        if ($lastAktaPerkawinan) {
            $lastNumber = (int)substr($lastAktaPerkawinan->id, -4);
            $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '0001';
        }

        return $prefix . $newNumber;
    }

    public function generateNoAktaLahir()
    {
        $prefix = 'AKTA-LAHIR-';

        $lastAktaLahir = AktaLahir::where('id', 'like', '%')
            ->orderBy('id', 'desc')
            ->first();

        if ($lastAktaLahir) {
            $lastNumber = (int)substr($lastAktaLahir->id, -4);
            $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '0001';
        }

        return $prefix . $newNumber;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AktaLahirController extends Controller
{
    public function index() {
        $jenisKelamin = $this->getJenisKelamin();
        $tempatLahir = $this->getTempatLahir();
        $jenisKelahiran = $this->getJenisKelahiran();
        $penolongKelahiran = $this->getPenolongKelahiran();
        $pekerjaan = $this->getPekerjaan();
        $kewarganegaraan = $this->getKewarganegaraan();

        return view('akta-lahir.index', compact('jenisKelamin', 'tempatLahir', 'jenisKelahiran', 'penolongKelahiran', 'pekerjaan', 'kewarganegaraan'));
    }
}

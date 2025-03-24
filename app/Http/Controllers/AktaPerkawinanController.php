<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AktaPerkawinanController extends Controller
{
    public function index() {
        $pendidikanTerakhir = $this->getPendidikanTerakhir();
        $agama = $this->getAgama();
        $pekerjaan = $this->getPekerjaan();
        $statusPerkawinan = $this->getStatusPerkawinan();
        $kewarganegaraan = $this->getKewarganegaraan();

        return view('akta-perkawinan.index', compact('pendidikanTerakhir', 'agama', 'pekerjaan', 'statusPerkawinan', 'kewarganegaraan'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AktaPerkawinan;
use App\Models\PerkawinanAyahIstri;
use App\Models\PerkawinanAyahSuami;
use App\Models\PerkawinanIbuIstri;
use App\Models\PerkawinanIbuSuami;
use App\Models\PerkawinanIstri;
use App\Models\PerkawinanPerkawinan;
use App\Models\PerkawinanSaksi;
use App\Models\PerkawinanSuami;
use Illuminate\Container\Attributes\Auth;
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

    public function store(Request $request) {
        $userLogin = Auth::user()->id;

        $aktaPerkawinan = new AktaPerkawinan();
        $aktaPerkawinan->user_id = $userLogin;
        $aktaPerkawinan->status = 'pending';
        $aktaPerkawinan->save();

        $this->storeSuami($request, $aktaPerkawinan->id);
        $this->storeAyahSuami($request, $aktaPerkawinan->id);
        $this->storeIbuSuami($request, $aktaPerkawinan->id);
        $this->storeIstri($request, $aktaPerkawinan->id);
        $this->storeAyahIstri($request, $aktaPerkawinan->id);
        $this->storeIbuIstri($request, $aktaPerkawinan->id);
        $this->storeSaksi($request, $aktaPerkawinan->id);
    }

    private function storeSuami($request, $aktaPerkawinanId) {
        $suami = new PerkawinanSuami();

        $suami->akta_perkawinan_id = $aktaPerkawinanId;
        $suami->nik = $request->ds_nik;
        $suami->nomor_kk = $request->ds_nomor_kk;
        $suami->nomor_paspor = $request->ds_nomor_paspor;
        $suami->nama_lengkap = $request->ds_nama_lengkap;
        $suami->agama = $request->ds_agama;
        $suami->tanggal_lahir = $request->ds_tanggal_lahir;
        $suami->tempat_lahir = $request->ds_tempat_lahir;
        $suami->alamat = $request->ds_alamat;
        $suami->rt = $request->ds_rt;
        $suami->rw = $request->ds_rw;
        $suami->kode_pos = $request->ds_kode_pos;
        $suami->telepon = $request->ds_telepon;
        $suami->kelurahan = $request->ds_kelurahan;
        $suami->kecamatan = $request->ds_kecamatan;
        $suami->kabupaten = $request->ds_kabupaten;
        $suami->provinsi = $request->ds_provinsi;
        $suami->pendidikan_terakhir = $request->ds_pendidikan_terakhir;
        $suami->agama = $request->ds_agama;
        $suami->organisasi_penghayat = $request->ds_organisasi_penghayat;
        $suami->pekerjaan = $request->ds_pekerjaan;
        $suami->anak_ke = $request->ds_anak_ke;
        $suami->status_perkawinan = $request->ds_status_perkawinan;
        $suami->perkawinan_ke = $request->ds_perkawinan_ke;
        $suami->istri_ke = $request->ds_istri_ke;
        $suami->kewarganegaraan = $request->ds_kewarganegaraan;
        $suami->kebangsaan = $request->ds_kebangsaan;

        $suami->save();
    }

    private function storeAyahSuami($request, $aktaPerkawinanId) {
        $ayahSuami = new PerkawinanAyahSuami();

        $ayahSuami->akta_perkawinan_id = $aktaPerkawinanId;
        $ayahSuami->nik = $request->dads_nik;
        $ayahSuami->nama_lengkap = $request->dads_nama_lengkap;
        $ayahSuami->agama = $request->dads_agama;
        $ayahSuami->organisasi_penghayat = $request->dads_organisasi_penghayat;
        $ayahSuami->tanggal_lahir = $request->dads_tanggal_lahir;
        $ayahSuami->tempat_lahir = $request->dads_tempat_lahir;
        $ayahSuami->alamat = $request->dads_alamat;
        $ayahSuami->rt = $request->dads_rt;
        $ayahSuami->rw = $request->dads_rw;
        $ayahSuami->kode_pos = $request->dads_kode_pos;
        $ayahSuami->telepon = $request->dads_telepon;
        $ayahSuami->kelurahan = $request->dads_kelurahan;
        $ayahSuami->kecamatan = $request->dads_kecamatan;
        $ayahSuami->kabupaten = $request->dads_kabupaten;
        $ayahSuami->provinsi = $request->dads_provinsi;
        $ayahSuami->pekerjaan = $request->dads_pekerjaan;

        $ayahSuami->save();
    }

    private function storeIbuSuami($request, $aktaPerkawinanId) {
        $ibuSuami = new PerkawinanIbuSuami();

        $ibuSuami->akta_perkawinan_id = $aktaPerkawinanId;
        $ibuSuami->nik = $request->dids_nik;
        $ibuSuami->nama_lengkap = $request->dids_nama_lengkap;
        $ibuSuami->agama = $request->dids_agama;
        $ibuSuami->organisasi_penghayat = $request->dids_organisasi_penghayat;
        $ibuSuami->tanggal_lahir = $request->dids_tanggal_lahir;
        $ibuSuami->tempat_lahir = $request->dids_tempat_lahir;
        $ibuSuami->alamat = $request->dids_alamat;
        $ibuSuami->rt = $request->dids_rt;
        $ibuSuami->rw = $request->dids_rw;
        $ibuSuami->kode_pos = $request->dids_kode_pos;
        $ibuSuami->telepon = $request->dids_telepon;
        $ibuSuami->kelurahan = $request->dids_kelurahan;
        $ibuSuami->kecamatan = $request->dids_kecamatan;
        $ibuSuami->kabupaten = $request->dids_kabupaten;
        $ibuSuami->provinsi = $request->dids_provinsi;
        $ibuSuami->pekerjaan = $request->dids_pekerjaan;

        $ibuSuami->save();
    }

    private function storeIstri($request, $aktaPerkawinanId) {
        $istri = new PerkawinanIstri();

        $istri->akta_perkawinan_id = $aktaPerkawinanId;
        $istri->nik = $request->di_nik;
        $istri->nomor_kk = $request->di_nomor_kk;
        $istri->nomor_paspor = $request->di_nomor_paspor;
        $istri->nama_lengkap = $request->di_nama_lengkap;
        $istri->agama = $request->di_agama;
        $istri->tanggal_lahir = $request->di_tanggal_lahir;
        $istri->tempat_lahir = $request->di_tempat_lahir;
        $istri->alamat = $request->di_alamat;
        $istri->rt = $request->di_rt;
        $istri->rw = $request->di_rw;
        $istri->kode_pos = $request->di_kode_pos;
        $istri->telepon = $request->di_telepon;
        $istri->kelurahan = $request->di_kelurahan;
        $istri->kecamatan = $request->di_kecamatan;
        $istri->kabupaten = $request->di_kabupaten;
        $istri->provinsi = $request->di_provinsi;
        $istri->pendidikan_terakhir = $request->di_pendidikan_terakhir;
        $istri->agama = $request->di_agama;
        $istri->organisasi_penghayat = $request->di_organisasi_penghayat;
        $istri->pekerjaan = $request->di_pekerjaan;
        $istri->anak_ke = $request->di_anak_ke;
        $istri->status_perkawinan = $request->di_status_perkawinan;
        $istri->perkawinan_ke = $request->di_perkawinan_ke;
        $istri->kewarganegaraan = $request->di_kewarganegaraan;
        $istri->kebangsaan = $request->di_kebangsaan;

        $istri->save();
    }

    private function storeAyahIstri($request, $aktaPerkawinanId) {
        $ayahIstri = new PerkawinanAyahIstri();

        $ayahIstri->akta_perkawinan_id = $aktaPerkawinanId;
        $ayahIstri->nik = $request->dadi_nik;
        $ayahIstri->nama_lengkap = $request->dadi_nama_lengkap;
        $ayahIstri->agama = $request->dadi_agama;
        $ayahIstri->organisasi_penghayat = $request->dadi_organisasi_penghayat;
        $ayahIstri->tanggal_lahir = $request->dadi_tanggal_lahir;
        $ayahIstri->tempat_lahir = $request->dadi_tempat_lahir;
        $ayahIstri->alamat = $request->dadi_alamat;
        $ayahIstri->rt = $request->dadi_rt;
        $ayahIstri->rw = $request->dadi_rw;
        $ayahIstri->kode_pos = $request->dadi_kode_pos;
        $ayahIstri->telepon = $request->dadi_telepon;
        $ayahIstri->kelurahan = $request->dadi_kelurahan;
        $ayahIstri->kecamatan = $request->dadi_kecamatan;
        $ayahIstri->kabupaten = $request->dadi_kabupaten;
        $ayahIstri->provinsi = $request->dadi_provinsi;
        $ayahIstri->pekerjaan = $request->dadi_pekerjaan;

        $ayahIstri->save();
    }

    private function storeIbuIstri($request, $aktaPerkawinanId) {
        $ibuIstri = new PerkawinanIbuIstri();

        $ibuIstri->akta_perkawinan_id = $aktaPerkawinanId;
        $ibuIstri->nik = $request->didi_nik;
        $ibuIstri->nama_lengkap = $request->didi_nama_lengkap;
        $ibuIstri->agama = $request->didi_agama;
        $ibuIstri->organisasi_penghayat = $request->didi_organisasi_penghayat;
        $ibuIstri->tanggal_lahir = $request->didi_tanggal_lahir;
        $ibuIstri->tempat_lahir = $request->didi_tempat_lahir;
        $ibuIstri->alamat = $request->didi_alamat;
        $ibuIstri->rt = $request->didi_rt;
        $ibuIstri->rw = $request->didi_rw;
        $ibuIstri->kode_pos = $request->didi_kode_pos;
        $ibuIstri->telepon = $request->didi_telepon;
        $ibuIstri->kelurahan = $request->didi_kelurahan;
        $ibuIstri->kecamatan = $request->didi_kecamatan;
        $ibuIstri->kabupaten = $request->didi_kabupaten;
        $ibuIstri->provinsi = $request->didi_provinsi;
        $ibuIstri->pekerjaan = $request->didi_pekerjaan;

        $ibuIstri->save();
    }

    private function storeSaksi($request, $aktaPerkawinanId) {
        $saksi = new PerkawinanSaksi();

        $saksi->akta_perkawinan_id = $aktaPerkawinanId;
        $saksi->saksi_1 = $request->ds_1;
        $saksi->saksi_2 = $request->ds_2;

        $saksi->save();
    }

    private function storePerkawinan($request, $aktaPerkawinanId) {
        $perkawinan = new PerkawinanPerkawinan();

        $perkawinan->akta_perkawinan_id = $aktaPerkawinanId;
        $perkawinan->tanggal_pemberkatan_perkawinan = $request->dp_tanggal_pemberkatan;
        $perkawinan->tanggal_melapor = $request->dp_tanggal_melapor;
        $perkawinan->pukul = $request->dp_pukul;
        $perkawinan->agama = $request->dp_agama;
        $perkawinan->organisasi_penghayat = $request->dp_nama_pemuka_agama;
        $perkawinan->nama_badan_peradilan = $request->dp_badan_peradilan;
        $perkawinan->nomor_putusan_pengadilan = $request->dp_no_putusan_pengadilan;
        $perkawinan->tanggal_putusan = $request->dp_no_putusan_pengadilan;
        $perkawinan->ijin_perwakilan = $request->dp_ijin_perwakilan;
        $perkawinan->jumlah_anak = $request->dp_jumlah_anak;
        $perkawinan->anak = $request->anak;

        $perkawinan->save();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\AktaPerkawinan\DataAdministrasiRequest;
use App\Http\Requests\AktaPerkawinan\DataAyahIstriRequest;
use App\Http\Requests\AktaPerkawinan\DataAyahSuamiRequest;
use App\Http\Requests\AktaPerkawinan\DataIbuIstriRequest;
use App\Http\Requests\AktaPerkawinan\DataIbuSuamiRequest;
use App\Http\Requests\AktaPerkawinan\DataIstriRequest;
use App\Http\Requests\AktaPerkawinan\DataPerkawinanRequest;
use App\Http\Requests\AktaPerkawinan\DataSaksiRequest;
use App\Http\Requests\AktaPerkawinan\DataSuamiRequest;
use App\Models\AktaPerkawinan;
use App\Models\PerkawinanAdministrasi;
use App\Models\PerkawinanAyahIstri;
use App\Models\PerkawinanAyahSuami;
use App\Models\PerkawinanIbuIstri;
use App\Models\PerkawinanIbuSuami;
use App\Models\PerkawinanIstri;
use App\Models\PerkawinanPerkawinan;
use App\Models\PerkawinanSaksi;
use App\Models\PerkawinanSuami;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Spatie\Browsershot\Browsershot;

class AktaPerkawinanController extends Controller
{
    public function index() {
        $dataType = 'Akta Perkawinan';
        $userLogin = Auth::user()->id;
        $hasAktaPerkawinan = AktaPerkawinan::with([
            'user',
            'petugas',
            'perkawinanSuami',
            'perkawinanAyahSuami',
            'perkawinanIbuSuami',
            'perkawinanIstri',
            'perkawinanAyahIstri',
            'perkawinanIbuIstri',
            'perkawinanSaksi',
            'perkawinanPerkawinan',
            'perkawinanAdministrasi'
        ])
        ->where('user_id', $userLogin)
        ->first();

        $aktaPerkawinans = AktaPerkawinan::with(['petugas', 'perkawinanSuami', 'perkawinanIstri'])->get();
        $pendidikanTerakhir = $this->getPendidikanTerakhir();
        $agama = $this->getAgama();
        $pekerjaan = $this->getPekerjaan();
        $statusPerkawinan = $this->getStatusPerkawinan();
        $kewarganegaraan = $this->getKewarganegaraan();

        $data = [
            'pendidikanTerakhir' => $pendidikanTerakhir,
            'agama' => $agama,
            'pekerjaan' => $pekerjaan,
            'statusPerkawinan' => $statusPerkawinan,
            'kewarganegaraan' => $kewarganegaraan,
            'hasAktaPerkawinan' => $hasAktaPerkawinan,
            'dataType' => $dataType,
            'aktaPerkawinans' => $aktaPerkawinans,
        ];

        if (auth()->user()->role == 'user' && $hasAktaPerkawinan) {
            $data['anakData'] = json_decode($hasAktaPerkawinan->perkawinanPerkawinan->anak, true);
            $data['persyaratanData'] = json_decode($hasAktaPerkawinan->perkawinanAdministrasi->persyaratan, true);
        }

        return view('akta-perkawinan.index', $data);
    }

    public function store(Request $request)
    {
        $rules = array_merge(
            (new DataSuamiRequest())->rules(),
            (new DataAyahSuamiRequest())->rules(),
            (new DataIbuSuamiRequest())->rules(),
            (new DataIstriRequest())->rules(),
            (new DataAyahIstriRequest())->rules(),
            (new DataIbuIstriRequest())->rules(),
            (new DataSaksiRequest())->rules(),
            (new DataPerkawinanRequest())->rules(),
            (new DataAdministrasiRequest())->rules()
        );

        $messages = array_merge(
            (new DataSuamiRequest())->messages(),
            (new DataAyahSuamiRequest())->messages(),
            (new DataIbuSuamiRequest())->messages(),
            (new DataIstriRequest())->messages(),
            (new DataAyahIstriRequest())->messages(),
            (new DataIbuIstriRequest())->messages(),
            (new DataSaksiRequest())->messages(),
            (new DataPerkawinanRequest())->messages(),
            (new DataAdministrasiRequest())->messages()
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            toast('Periksa kembali data anda.', 'error')->hideCloseButton()->autoClose(3000);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $userLogin = Auth::user()->id;

        $pengajuanTertolak = AktaPerkawinan::where('user_id', $userLogin)
            ->where('status', 'rejected')
            ->first();

        if ($pengajuanTertolak) {
            $pengajuanTertolak->perkawinanSuami()->delete();
            $pengajuanTertolak->perkawinanAyahSuami()->delete();
            $pengajuanTertolak->perkawinanIbuSuami()->delete();
            $pengajuanTertolak->perkawinanIstri()->delete();
            $pengajuanTertolak->perkawinanAyahIstri()->delete();
            $pengajuanTertolak->perkawinanIbuIstri()->delete();
            $pengajuanTertolak->perkawinanSaksi()->delete();
            $pengajuanTertolak->perkawinanPerkawinan()->delete();
            $pengajuanTertolak->perkawinanAdministrasi?->deleteWithFiles();

            $pengajuanTertolak->delete();
        }

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
        $this->storePerkawinan($request, $aktaPerkawinan->id);
        $this->storeAdministrasi($request, $aktaPerkawinan->id);

        toast('Data Akta Perkawinan Anda berhasil disimpan!', 'success')->hideCloseButton()->autoClose(3000);
        return redirect()->route('akta-perkawinan.index');
    }

    private function storeSuami($dataSuamiRequest, $aktaPerkawinanId) {
        $suami = new PerkawinanSuami();

        $suami->akta_perkawinan_id = $aktaPerkawinanId;
        $suami->nik = $dataSuamiRequest->ds_nik;
        $suami->nomor_kk = $dataSuamiRequest->ds_nomor_kk;
        $suami->nomor_paspor = $dataSuamiRequest->ds_nomor_paspor;
        $suami->nama_lengkap = $dataSuamiRequest->ds_nama_lengkap;
        $suami->tanggal_lahir = $dataSuamiRequest->ds_tanggal_lahir;
        $suami->tempat_lahir = $dataSuamiRequest->ds_tempat_lahir;
        $suami->alamat = $dataSuamiRequest->ds_alamat;
        $suami->rt = $dataSuamiRequest->ds_rt;
        $suami->rw = $dataSuamiRequest->ds_rw;
        $suami->kode_pos = $dataSuamiRequest->ds_kode_pos;
        $suami->telepon = $dataSuamiRequest->ds_telepon;
        $suami->desa_kelurahan = $dataSuamiRequest->ds_kelurahan;
        $suami->kecamatan = $dataSuamiRequest->ds_kecamatan;
        $suami->kabupaten_kota = $dataSuamiRequest->ds_kabupaten;
        $suami->provinsi = $dataSuamiRequest->ds_provinsi;
        $suami->pendidikan_terakhir = $dataSuamiRequest->ds_pendidikan_terakhir;
        $suami->agama = $dataSuamiRequest->ds_agama;
        $suami->organisasi_penghayat = $dataSuamiRequest->ds_organisasi_penghayat;
        $suami->pekerjaan = $dataSuamiRequest->ds_pekerjaan;
        $suami->anak_ke = $dataSuamiRequest->ds_anak_ke;
        $suami->status_perkawinan = $dataSuamiRequest->ds_status_perkawinan;
        $suami->perkawinan_ke = $dataSuamiRequest->ds_perkawinan_ke;
        $suami->istri_ke = $dataSuamiRequest->ds_istri_ke;
        $suami->kewarganegaraan = $dataSuamiRequest->ds_kewarganegaraan;
        $suami->kebangsaan = $dataSuamiRequest->ds_kebangsaan;

        $suami->save();
    }

    private function storeAyahSuami($dataAyahSuamiRequest, $aktaPerkawinanId) {
        $ayahSuami = new PerkawinanAyahSuami();

        $ayahSuami->akta_perkawinan_id = $aktaPerkawinanId;
        $ayahSuami->nik = $dataAyahSuamiRequest->dads_nik;
        $ayahSuami->nama_lengkap = $dataAyahSuamiRequest->dads_nama_lengkap;
        $ayahSuami->agama = $dataAyahSuamiRequest->dads_agama;
        $ayahSuami->organisasi_penghayat = $dataAyahSuamiRequest->dads_organisasi_penghayat;
        $ayahSuami->tanggal_lahir = $dataAyahSuamiRequest->dads_tanggal_lahir;
        $ayahSuami->tempat_lahir = $dataAyahSuamiRequest->dads_tempat_lahir;
        $ayahSuami->alamat = $dataAyahSuamiRequest->dads_alamat;
        $ayahSuami->rt = $dataAyahSuamiRequest->dads_rt;
        $ayahSuami->rw = $dataAyahSuamiRequest->dads_rw;
        $ayahSuami->kode_pos = $dataAyahSuamiRequest->dads_kode_pos;
        $ayahSuami->telepon = $dataAyahSuamiRequest->dads_telepon;
        $ayahSuami->desa_kelurahan = $dataAyahSuamiRequest->dads_kelurahan;
        $ayahSuami->kecamatan = $dataAyahSuamiRequest->dads_kecamatan;
        $ayahSuami->kabupaten_kota = $dataAyahSuamiRequest->dads_kabupaten;
        $ayahSuami->provinsi = $dataAyahSuamiRequest->dads_provinsi;
        $ayahSuami->pekerjaan = $dataAyahSuamiRequest->dads_pekerjaan;

        $ayahSuami->save();
    }

    private function storeIbuSuami($dataIbuSuamiRequest, $aktaPerkawinanId) {
        $ibuSuami = new PerkawinanIbuSuami();

        $ibuSuami->akta_perkawinan_id = $aktaPerkawinanId;
        $ibuSuami->nik = $dataIbuSuamiRequest->dids_nik;
        $ibuSuami->nama_lengkap = $dataIbuSuamiRequest->dids_nama_lengkap;
        $ibuSuami->agama = $dataIbuSuamiRequest->dids_agama;
        $ibuSuami->organisasi_penghayat = $dataIbuSuamiRequest->dids_organisasi_penghayat;
        $ibuSuami->tanggal_lahir = $dataIbuSuamiRequest->dids_tanggal_lahir;
        $ibuSuami->tempat_lahir = $dataIbuSuamiRequest->dids_tempat_lahir;
        $ibuSuami->alamat = $dataIbuSuamiRequest->dids_alamat;
        $ibuSuami->rt = $dataIbuSuamiRequest->dids_rt;
        $ibuSuami->rw = $dataIbuSuamiRequest->dids_rw;
        $ibuSuami->kode_pos = $dataIbuSuamiRequest->dids_kode_pos;
        $ibuSuami->telepon = $dataIbuSuamiRequest->dids_telepon;
        $ibuSuami->desa_kelurahan = $dataIbuSuamiRequest->dids_kelurahan;
        $ibuSuami->kecamatan = $dataIbuSuamiRequest->dids_kecamatan;
        $ibuSuami->kabupaten_kota = $dataIbuSuamiRequest->dids_kabupaten;
        $ibuSuami->provinsi = $dataIbuSuamiRequest->dids_provinsi;
        $ibuSuami->pekerjaan = $dataIbuSuamiRequest->dids_pekerjaan;

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
        $istri->desa_kelurahan = $request->di_kelurahan;
        $istri->kecamatan = $request->di_kecamatan;
        $istri->kabupaten_kota = $request->di_kabupaten;
        $istri->provinsi = $request->di_provinsi;
        $istri->pendidikan_terakhir = $request->di_pendidikan_terakhir;
        $istri->organisasi_penghayat = $request->di_organisasi_penghayat;
        $istri->pekerjaan = $request->di_pekerjaan;
        $istri->anak_ke = $request->di_anak_ke;
        $istri->status_perkawinan = $request->di_status_perkawinan;
        $istri->perkawinan_ke = $request->di_perkawinan_ke;
        $istri->kewarganegaraan = $request->di_kewarganegaraan;
        $istri->kebangsaan = $request->di_kebangsaan;

        $istri->save();
    }

    private function storeAyahIstri($dataAyahIstriRequest, $aktaPerkawinanId) {
        $ayahIstri = new PerkawinanAyahIstri();

        $ayahIstri->akta_perkawinan_id = $aktaPerkawinanId;
        $ayahIstri->nik = $dataAyahIstriRequest->dadi_nik;
        $ayahIstri->nama_lengkap = $dataAyahIstriRequest->dadi_nama_lengkap;
        $ayahIstri->agama = $dataAyahIstriRequest->dadi_agama;
        $ayahIstri->organisasi_penghayat = $dataAyahIstriRequest->dadi_organisasi_penghayat;
        $ayahIstri->tanggal_lahir = $dataAyahIstriRequest->dadi_tanggal_lahir;
        $ayahIstri->tempat_lahir = $dataAyahIstriRequest->dadi_tempat_lahir;
        $ayahIstri->alamat = $dataAyahIstriRequest->dadi_alamat;
        $ayahIstri->rt = $dataAyahIstriRequest->dadi_rt;
        $ayahIstri->rw = $dataAyahIstriRequest->dadi_rw;
        $ayahIstri->kode_pos = $dataAyahIstriRequest->dadi_kode_pos;
        $ayahIstri->telepon = $dataAyahIstriRequest->dadi_telepon;
        $ayahIstri->desa_kelurahan = $dataAyahIstriRequest->dadi_kelurahan;
        $ayahIstri->kecamatan = $dataAyahIstriRequest->dadi_kecamatan;
        $ayahIstri->kabupaten_kota = $dataAyahIstriRequest->dadi_kabupaten;
        $ayahIstri->provinsi = $dataAyahIstriRequest->dadi_provinsi;
        $ayahIstri->pekerjaan = $dataAyahIstriRequest->dadi_pekerjaan;

        $ayahIstri->save();
    }

    private function storeIbuIstri($dataIbuIstriRequest, $aktaPerkawinanId) {
        $ibuIstri = new PerkawinanIbuIstri();

        $ibuIstri->akta_perkawinan_id = $aktaPerkawinanId;
        $ibuIstri->nik = $dataIbuIstriRequest->didi_nik;
        $ibuIstri->nama_lengkap = $dataIbuIstriRequest->didi_nama_lengkap;
        $ibuIstri->agama = $dataIbuIstriRequest->didi_agama;
        $ibuIstri->organisasi_penghayat = $dataIbuIstriRequest->didi_organisasi_penghayat;
        $ibuIstri->tanggal_lahir = $dataIbuIstriRequest->didi_tanggal_lahir;
        $ibuIstri->tempat_lahir = $dataIbuIstriRequest->didi_tempat_lahir;
        $ibuIstri->alamat = $dataIbuIstriRequest->didi_alamat;
        $ibuIstri->rt = $dataIbuIstriRequest->didi_rt;
        $ibuIstri->rw = $dataIbuIstriRequest->didi_rw;
        $ibuIstri->kode_pos = $dataIbuIstriRequest->didi_kode_pos;
        $ibuIstri->telepon = $dataIbuIstriRequest->didi_telepon;
        $ibuIstri->desa_kelurahan = $dataIbuIstriRequest->didi_kelurahan;
        $ibuIstri->kecamatan = $dataIbuIstriRequest->didi_kecamatan;
        $ibuIstri->kabupaten_kota = $dataIbuIstriRequest->didi_kabupaten;
        $ibuIstri->provinsi = $dataIbuIstriRequest->didi_provinsi;
        $ibuIstri->pekerjaan = $dataIbuIstriRequest->didi_pekerjaan;

        $ibuIstri->save();
    }

    private function storeSaksi($dataSaksiRequest, $aktaPerkawinanId) {
        $saksi = new PerkawinanSaksi();
        $saksi->akta_perkawinan_id = $aktaPerkawinanId;

        $getSaksiData = function($prefix) use ($dataSaksiRequest) {
            return [
                'nik' => $dataSaksiRequest->{$prefix}['nik'],
                'nama_lengkap' => $dataSaksiRequest->{$prefix}['nama_lengkap'],
                'tempat_lahir' => $dataSaksiRequest->{$prefix}['tempat_lahir'],
                'tanggal_lahir' => $dataSaksiRequest->{$prefix}['tanggal_lahir'],
                'alamat' => $dataSaksiRequest->{$prefix}['alamat'],
                'rt' => $dataSaksiRequest->{$prefix}['rt'],
                'rw' => $dataSaksiRequest->{$prefix}['rw'],
                'kode_pos' => $dataSaksiRequest->{$prefix}['kode_pos'],
                'telepon' => $dataSaksiRequest->{$prefix}['telepon'],
                'kelurahan' => $dataSaksiRequest->{$prefix}['kelurahan'],
                'kecamatan' => $dataSaksiRequest->{$prefix}['kecamatan'],
                'kabupaten' => $dataSaksiRequest->{$prefix}['kabupaten'],
                'provinsi' => $dataSaksiRequest->{$prefix}['provinsi'],
                'pekerjaan' => $dataSaksiRequest->{$prefix}['pekerjaan'],
                'agama' => $dataSaksiRequest->{$prefix}['agama'],
                'organisasi_penghayat' => $dataSaksiRequest->{$prefix}['organisasi_penghayat'] ?? null,
            ];
        };

        $saksi_1 = $getSaksiData('ds_1');
        $saksi_2 = $getSaksiData('ds_2');

        $saksi->saksi_1 = json_encode($saksi_1);
        $saksi->saksi_2 = json_encode($saksi_2);

        $saksi->save();
    }

    private function storePerkawinan($dataPerkawinanRequest, $aktaPerkawinanId) {
        $perkawinan = new PerkawinanPerkawinan();

        $perkawinan->akta_perkawinan_id = $aktaPerkawinanId;
        $perkawinan->tanggal_pemberkatan_perkawinan = $dataPerkawinanRequest->dp_tanggal_pemberkatan_perkawinan;
        $perkawinan->tanggal_melapor = $dataPerkawinanRequest->dp_tanggal_melapor;
        $perkawinan->pukul = $dataPerkawinanRequest->dp_pukul;
        $perkawinan->agama = $dataPerkawinanRequest->dp_agama;
        $perkawinan->organisasi_penghayat = $dataPerkawinanRequest->dp_organisasi_penghayat;
        $perkawinan->nama_pemuka_agama = $dataPerkawinanRequest->dp_nama_pemuka_agama;
        $perkawinan->nama_badan_peradilan = $dataPerkawinanRequest->dp_nama_badan_peradilan;
        $perkawinan->nomor_putusan_pengadilan = $dataPerkawinanRequest->dp_no_putusan_pengadilan;
        $perkawinan->tanggal_putusan = $dataPerkawinanRequest->dp_tanggal_putusan;
        $perkawinan->ijin_perwakilan = $dataPerkawinanRequest->dp_ijin_perwakilan;
        $perkawinan->jumlah_anak = $dataPerkawinanRequest->dp_jumlah_anak;

        $anakData = [];
        if ($dataPerkawinanRequest->has('anak')) {
            foreach ($dataPerkawinanRequest->anak as $anak) {
                $anakData[] = [
                    'nama_anak' => $anak['nama_anak'] ?? null,
                    'no_akta' => $anak['no_akta'] ?? null,
                    'tanggal_akta' => $anak['tanggal_akta'] ?? null
                ];
            }
        }

        $perkawinan->anak = json_encode($anakData);
        $perkawinan->save();
    }

    private function storeAdministrasi($dataAdministrasiRequest, $aktaPerkawinanId) {
        $administrasi = new PerkawinanAdministrasi();

        $administrasi->akta_perkawinan_id = $aktaPerkawinanId;

        $persyaratanData = [];
        if ($dataAdministrasiRequest->has('persyaratan')) {
            foreach ($dataAdministrasiRequest->persyaratan as $item) {
                $path = null;

                if (isset($item['file']) && $item['file'] instanceof \Illuminate\Http\UploadedFile) {
                    $path = $item['file']->store('persyaratan', 'public');
                }

                $persyaratanData[] = [
                    'nama_persyaratan' => $item['persyaratan'],
                    'path' => $path
                ];
            }
        }

        $administrasi->persyaratan = json_encode($persyaratanData);
        $administrasi->save();
    }

    public function show($aktaPerkawinanId)
    {
        $aktaPerkawinan = AktaPerkawinan::with([
            'user',
            'petugas',
            'perkawinanSuami',
            'perkawinanAyahSuami',
            'perkawinanIbuSuami',
            'perkawinanIstri',
            'perkawinanAyahIstri',
            'perkawinanIbuIstri',
            'perkawinanSaksi',
            'perkawinanPerkawinan',
            'perkawinanAdministrasi'
        ])->find($aktaPerkawinanId);

        $anakData = json_decode($aktaPerkawinan->perkawinanPerkawinan->anak, true);
        $persyaratanData = json_decode($aktaPerkawinan->perkawinanAdministrasi->persyaratan, true);

        return view('akta-perkawinan.show', compact('aktaPerkawinan', 'anakData', 'persyaratanData'));
    }

    public function acceptAktaPerkawinan($aktaPerkawinanId) {
        $userLogin = Auth::user()->id;

        $aktaPerkawinan = AktaPerkawinan::find($aktaPerkawinanId);
        $aktaPerkawinan->status = 'approved';
        $aktaPerkawinan->nomor_akta = $this->generateNoAktaPerkawinan();
        $aktaPerkawinan->tanggal_akta = now();
        $aktaPerkawinan->petugas_id = $userLogin;
        $aktaPerkawinan->save();

        $this->generatePDF($aktaPerkawinanId);

        toast('Data Akta Perkawinan berhasil diverifikasi!','success')->hideCloseButton()->autoClose(3000);
        return redirect()->back();
    }

    public function rejectAktaPerkawinan(Request $request, $aktaPerkawinanId)
    {
        $request->validate([
            'alasan' => 'required|string|max:1000'
        ]);

        $userLogin = Auth::user()->id;

        $aktaPerkawinan = AktaPerkawinan::findOrFail($aktaPerkawinanId);
        $aktaPerkawinan->status = 'rejected';
        $aktaPerkawinan->alasan = $request->alasan;
        $aktaPerkawinan->petugas_id = $userLogin;
        $aktaPerkawinan->save();

        toast('Data Akta Perkawinan berhasil ditolak!','success')->hideCloseButton()->autoClose(3000);
        return redirect()->back();
    }

    private function generatePDF($aktaPerkawinanId) {
        $aktaPerkawinan = AktaPerkawinan::with([
            'user',
            'petugas',
            'perkawinanSuami',
            'perkawinanAyahSuami',
            'perkawinanIbuSuami',
            'perkawinanIstri',
            'perkawinanAyahIstri',
            'perkawinanIbuIstri',
            'perkawinanSaksi',
            'perkawinanPerkawinan',
            'perkawinanAdministrasi'
        ])->find($aktaPerkawinanId);

        $html = view('pdf.akta-perkawinan', compact('aktaPerkawinan'))->render();
        $fileName = 'akta-perkawinan-' . Str::slug($aktaPerkawinan->user->name) . '.pdf';
        $filePath = public_path('storage/akta-perkawinan/' . $fileName);

        Browsershot::html($html)
            ->format('A4')
            ->margins(10, 10, 10, 10)
            ->save($filePath);

        return response()->json([
            'url' => asset('storage/akta-perkawinan/' . $fileName)
        ]);
    }

    public function viewPDF($aktaPerkawinanId)
    {
        $akta = AktaPerkawinan::findOrFail($aktaPerkawinanId);

        $akta->tanggal_cetak = now();
        $akta->save();

        $fileName = 'akta-perkawinan-' . Str::slug($akta->user->name) . '.pdf';
        $filePath = asset('storage/akta-perkawinan/' . $fileName);

        return redirect($filePath);
    }

}

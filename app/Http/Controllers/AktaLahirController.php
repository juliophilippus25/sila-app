<?php

namespace App\Http\Controllers;

use App\Http\Requests\AktaLahir\DataAdministrasiRequest;
use App\Http\Requests\AktaLahir\DataAyahRequest;
use App\Http\Requests\AktaLahir\DataBayiAnakRequest;
use App\Http\Requests\AktaLahir\DataIbuRequest;
use App\Http\Requests\AktaLahir\DataPelaporRequest;
use App\Http\Requests\AktaLahir\DataSaksiRequest;
use App\Models\AktaLahir;
use App\Models\LahirAdministrasi;
use App\Models\LahirAyah;
use App\Models\LahirBayiAnak;
use App\Models\LahirIbu;
use App\Models\LahirPelapor;
use App\Models\LahirSaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AktaLahirController extends Controller
{
    public function index() {
        $dataType = 'Akta Lahir';
        $userLogin = Auth::user()->id;
        $hasAktaLahir = AktaLahir::with([
            'user',
            'petugas',
            'lahirBayiAnak',
            'lahirAyah',
            'lahirIbu',
            'lahirPelapor',
            'lahirSaksi',
            'lahirAdministrasi'
        ])
        ->where('user_id', $userLogin)
        ->first();

        $aktaLahirs = AktaLahir::with(['petugas', 'lahirBayiAnak', 'lahirAyah', 'lahirIbu', 'lahirPelapor', 'lahirSaksi', 'lahirAdministrasi'])->get();
        $jenisKelamin = $this->getJenisKelamin();
        $tempatLahir = $this->getTempatLahir();
        $jenisKelahiran = $this->getJenisKelahiran();
        $penolongKelahiran = $this->getPenolongKelahiran();
        $pekerjaan = $this->getPekerjaan();
        $kewarganegaraan = $this->getKewarganegaraan();

        $data = [
            'jenisKelamin' => $jenisKelamin,
            'tempatLahir' => $tempatLahir,
            'jenisKelahiran' => $jenisKelahiran,
            'penolongKelahiran' => $penolongKelahiran,
            'pekerjaan' => $pekerjaan,
            'kewarganegaraan' => $kewarganegaraan,
            'hasAktaLahir' => $hasAktaLahir,
            'dataType' => $dataType,
            'aktaLahirs' => $aktaLahirs,
        ];

        if (auth()->user()->role == 'user' && $hasAktaLahir) {
            $data['persyaratanData'] = json_decode($hasAktaLahir->lahirAdministrasi->persyaratan, true);
        }

        return view('akta-lahir.index', $data);
    }

    public function store(Request $request) {
        $rules = array_merge(
            (new DataBayiAnakRequest())->rules(),
            (new DataAyahRequest())->rules(),
            (new DataIbuRequest())->rules(),
            (new DataPelaporRequest())->rules(),
            (new DataSaksiRequest())->rules(),
            (new DataAdministrasiRequest())->rules()
        );

        $messages = array_merge(
            (new DataBayiAnakRequest())->messages(),
            (new DataAyahRequest())->messages(),
            (new DataIbuRequest())->messages(),
            (new DataPelaporRequest())->messages(),
            (new DataSaksiRequest())->messages(),
            (new DataAdministrasiRequest())->messages()
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            toast('Periksa kembali data anda.', 'error')->hideCloseButton()->autoClose(3000);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $userLogin = Auth::user()->id;

        $pengajuanTertolak = AktaLahir::where('user_id', $userLogin)
            ->where('status', 'rejected')
            ->first();

        if ($pengajuanTertolak) {
            $pengajuanTertolak->lahirBayiAnak()->delete();
            $pengajuanTertolak->lahirAyah()->delete();
            $pengajuanTertolak->lahirIbu()->delete();
            $pengajuanTertolak->lahirPelapor()->delete();
            $pengajuanTertolak->lahirSaksi()->delete();
            $pengajuanTertolak->lahirAdministrasi?->deleteWithFiles();

            $pengajuanTertolak->delete();
        }

        $aktaLahir = new AktaLahir();
        $aktaLahir->user_id = $userLogin;
        $aktaLahir->status = 'pending';
        $aktaLahir->save();

        $this->storeBayiAnak($request, $aktaLahir->id);
        $this->storeAyah($request, $aktaLahir->id);
        $this->storeIbu($request, $aktaLahir->id);
        $this->storePelapor($request, $aktaLahir->id);
        $this->storeSaksi($request, $aktaLahir->id);
        $this->storeAdministrasi($request, $aktaLahir->id);

        toast('Data Akta Lahir Anda berhasil disimpan!', 'success')->hideCloseButton()->autoClose(3000);
        return redirect()->route('akta-lahir.index');
    }

    private function storeBayiAnak($request, $aktaLahirId) {
        $bayiAnak = new LahirBayiAnak();

        $bayiAnak->akta_lahir_id = $aktaLahirId;
        $bayiAnak->nama_lengkap = $request->dba_nama_lengkap;
        $bayiAnak->jenis_kelamin = $request->dba_jenis_kelamin;
        $bayiAnak->tempat_dilahirkan = $request->dba_tempat_dilahirkan;
        $bayiAnak->tempat_kelahiran = $request->dba_tempat_kelahiran;
        $bayiAnak->tanggal_lahir = $request->dba_tanggal_lahir;
        $bayiAnak->pukul = $request->dba_pukul;
        $bayiAnak->jenis_kelahiran = $request->dba_jenis_kelahiran;
        $bayiAnak->kelahiran_ke = $request->dba_kelahiran_ke;
        $bayiAnak->penolong_kelahiran = $request->dba_penolong_kelahiran;
        $bayiAnak->berat_bayi = $request->dba_berat_bayi;
        $bayiAnak->panjang_bayi = $request->dba_panjang_bayi;

        $bayiAnak->save();
    }

    private function storeAyah($request, $aktaLahirId) {
        $ayah = new LahirAyah();

        $ayah->akta_lahir_id = $aktaLahirId;
        $ayah->nik = $request->da_nik;
        $ayah->nama_lengkap = $request->da_nama_lengkap;
        $ayah->tanggal_lahir = $request->da_tanggal_lahir;
        $ayah->umur = $request->da_umur;
        $ayah->pekerjaan = $request->da_pekerjaan;
        $ayah->desa_kelurahan = $request->da_kelurahan;
        $ayah->kecamatan = $request->da_kecamatan;
        $ayah->kabupaten_kota = $request->da_kabupaten;
        $ayah->provinsi = $request->da_provinsi;
        $ayah->alamat = $request->da_alamat;
        $ayah->kewarganegaraan = $request->da_kewarganegaraan;
        $ayah->kebangsaan = $request->da_kebangsaan;

        $ayah->save();
    }

    private function storeIbu($request, $aktaLahirId) {
        $ibu = new LahirIbu();

        $ibu->akta_lahir_id = $aktaLahirId;
        $ibu->nik = $request->di_nik;
        $ibu->nama_lengkap = $request->di_nama_lengkap;
        $ibu->tanggal_lahir = $request->di_tanggal_lahir;
        $ibu->umur = $request->di_umur;
        $ibu->pekerjaan = $request->di_pekerjaan;
        $ibu->desa_kelurahan = $request->di_kelurahan;
        $ibu->kecamatan = $request->di_kecamatan;
        $ibu->kabupaten_kota = $request->di_kabupaten;
        $ibu->provinsi = $request->di_provinsi;
        $ibu->alamat = $request->di_alamat;
        $ibu->kewarganegaraan = $request->di_kewarganegaraan;
        $ibu->kebangsaan = $request->di_kebangsaan;
        $ibu->tanggal_pencatatan_perkawinan = $request->di_pencatatan_perkawinan;

        $ibu->save();
    }

    private function storePelapor($request, $aktaLahirId) {
        $pelapor = new LahirPelapor();

        $pelapor->akta_lahir_id = $aktaLahirId;
        $pelapor->nik = $request->dp_nik;
        $pelapor->nama_lengkap = $request->dp_nama_lengkap;
        $pelapor->tanggal_lahir = $request->dp_tanggal_lahir;
        $pelapor->umur = $request->dp_umur;
        $pelapor->pekerjaan = $request->dp_pekerjaan;
        $pelapor->desa_kelurahan = $request->dp_kelurahan;
        $pelapor->kecamatan = $request->dp_kecamatan;
        $pelapor->kabupaten_kota = $request->dp_kabupaten;
        $pelapor->provinsi = $request->dp_provinsi;
        $pelapor->alamat = $request->dp_alamat;

        $pelapor->save();
    }

    private function storeSaksi($request, $aktaLahirId) {
        $saksi = new LahirSaksi();
        $saksi->akta_lahir_id = $aktaLahirId;

        $getSaksiData = function($prefix) use ($request) {
            return [
                'nik' => $request->{$prefix}['nik'],
                'nama_lengkap' => $request->{$prefix}['nama_lengkap'],
                'tanggal_lahir' => $request->{$prefix}['tanggal_lahir'],
                'umur' => $request->{$prefix}['umur'],
                'pekerjaan' => $request->{$prefix}['pekerjaan'],
                'desa_kelurahan' => $request->{$prefix}['kelurahan'],
                'kecamatan' => $request->{$prefix}['kecamatan'],
                'kabupaten_kota' => $request->{$prefix}['kabupaten'],
                'provinsi' => $request->{$prefix}['provinsi'],
                'alamat' => $request->{$prefix}['alamat'],
            ];
        };

        $saksi_1 = $getSaksiData('ds_1');
        $saksi_2 = $getSaksiData('ds_2');

        $saksi->saksi_1 = json_encode($saksi_1);
        $saksi->saksi_2 = json_encode($saksi_2);

        $saksi->save();
    }

    private function storeAdministrasi($request, $aktaLahirId) {
        $administrasi = new LahirAdministrasi();

        $administrasi->akta_lahir_id = $aktaLahirId;

        $persyaratanData = [];
        if ($request->has('persyaratan')) {
            foreach ($request->persyaratan as $item) {
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

    public function show($aktaLahirId)
    {
        $aktaLahir = AktaLahir::with([
            'user',
            'petugas',
            'lahirBayiAnak',
            'lahirAyah',
            'lahirIbu',
            'lahirPelapor',
            'lahirSaksi',
            'lahirAdministrasi'
        ])->find($aktaLahirId);

        $persyaratanData = json_decode($aktaLahir->lahirAdministrasi->persyaratan, true);

        return view('akta-lahir.show', compact('aktaLahir', 'persyaratanData'));
    }
}

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Akta Perkawinan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            background-color: #ffd8a4;
            /* Soft cream */
        }

        .akta-container {
            position: relative;
            padding: 60px;
            min-height: 100vh;
        }

        .border-svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .content {
            position: relative;
            z-index: 10;
        }
    </style>
</head>

<body class="text-sm text-gray-900 font-sans bg-[#ffd8a4]">
    <div class="akta-container">
        <!-- SVG Border -->
        <svg class="border-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1400" preserveAspectRatio="none">
            <rect x="10" y="10" width="980" height="1380" fill="none" stroke="#1f2937" stroke-width="8" />
            <rect x="30" y="30" width="940" height="1340" fill="none" stroke="#9ca3af" stroke-dasharray="15,10"
                stroke-width="2" />
        </svg>

        <!-- Main Content -->
        <div class="content">
            <div class="text-center mb-8">
                <h1 class="text-xl uppercase">Pencatatan Sipil</h1>
                <h1 class="text-xl uppercase">Warga Negara Indonesia</h1>
                <h1 class="text-xl uppercase">Kutipan</h1>
            </div>

            <div class="text-center mb-8">
                <h1 class="text-xl font-bold uppercase">Akta Perkawinan</h1>
                <p class="text-sm">{{ $aktaPerkawinan->nomor_akta }}</p>
            </div>


            <div class="mb-4">
                <p>
                    Dari Dinas Kependudukan & Pencatatan Sipil di Bengkayang dengan kode wilayah 6107, ternyata bahwa
                    pada tanggal {{ tglIndo($aktaPerkawinan->perkawinanPerkawinan->tanggal_melapor) }}
                </p>
            </div>

            <div class="mb-4">
                <p>Telah tercatat perkawinan antara :
                    <hr class="border-dashed">
                </p>
            </div>

            <div class="mb-4 text-center flex flex-col gap-4">
                <p class="text-lg font-bold uppercase">
                    {{ $aktaPerkawinan->perkawinanSuami->nama_lengkap }}
                </p>
                <p>dan</p>
                <p class="text-lg font-bold uppercase">
                    {{ $aktaPerkawinan->perkawinanIstri->nama_lengkap }}
                </p>
            </div>

            <div class="mb-4">
                <p>
                    Yang telah dilangsungkan dihadapan pemuka agama {{ $aktaPerkawinan->perkawinanSuami->agama }} yang
                    bernama {{ $aktaPerkawinan->perkawinanPerkawinan->nama_pemuka_agama }} pada tanggal
                    {{ tglIndo($aktaPerkawinan->perkawinanPerkawinan->tanggal_pemberkatan_perkawinan) }} di
                    {{ $aktaPerkawinan->perkawinanPerkawinan->nama_badan_peradilan }}
                </p>
            </div>

            <div class="mt-8 text-right">
                <p class="text-sm">Kutipan ini dikeluarkan di Bekayang </p>
                <p>pada tanggal {{ tglIndo($aktaPerkawinan->tanggal_akta) }}</p>
            </div>

            <div class="mt-8 text-right">
                <p class="mb-2">Pengesah,</p>

                <div class="h-24"></div>

                <p class="font-semibold underline">
                    {{ $aktaPerkawinan->petugas->name }}
                </p>
                <p class="text-sm">
                    NIP: {{ $aktaPerkawinan->petugas->nip }}
                </p>
            </div>

        </div>
    </div>
</body>

</html>

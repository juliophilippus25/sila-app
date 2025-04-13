<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuSuami->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuSuami->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuSuami->tempat_lahir ?? '-' }},
            {{ tglIndo($aktaPerkawinan->perkawinanIbuSuami->tanggal_lahir) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $aktaPerkawinan->perkawinanIbuSuami->alamat }},
            {{ $aktaPerkawinan->perkawinanIbuSuami->desa_kelurahan }},
            RT {{ $aktaPerkawinan->perkawinanIbuSuami->rt }},
            RW {{ $aktaPerkawinan->perkawinanIbuSuami->rw }},
            {{ $aktaPerkawinan->perkawinanIbuSuami->kabupaten_kota }},
            {{ $aktaPerkawinan->perkawinanIbuSuami->kecamatan }},
            {{ $aktaPerkawinan->perkawinanIbuSuami->provinsi }},
            {{ $aktaPerkawinan->perkawinanIbuSuami->kode_pos }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Telepon</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuSuami->telepon ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Pendidikan Terakhir</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuSuami->pendidikan_terakhir ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Agama</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuSuami->agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuSuami->organisasi_penghayat ?? '-' }}</span>
    </div>
</div>

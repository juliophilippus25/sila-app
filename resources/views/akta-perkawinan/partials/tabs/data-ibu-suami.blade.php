<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIbuSuami->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIbuSuami->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIbuSuami->tempat_lahir ?? '-' }},
            {{ tglIndo($hasAktaPerkawinan->perkawinanIbuSuami->tanggal_lahir) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $hasAktaPerkawinan->perkawinanIbuSuami->alamat }},
            {{ $hasAktaPerkawinan->perkawinanIbuSuami->desa_kelurahan }},
            RT {{ $hasAktaPerkawinan->perkawinanIbuSuami->rt }},
            RW {{ $hasAktaPerkawinan->perkawinanIbuSuami->rw }},
            {{ $hasAktaPerkawinan->perkawinanIbuSuami->kabupaten_kota }},
            {{ $hasAktaPerkawinan->perkawinanIbuSuami->kecamatan }},
            {{ $hasAktaPerkawinan->perkawinanIbuSuami->provinsi }},
            {{ $hasAktaPerkawinan->perkawinanIbuSuami->kode_pos }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Telepon</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIbuSuami->telepon ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Agama</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIbuSuami->agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIbuSuami->organisasi_penghayat ?? '-' }}</span>
    </div>
</div>

<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanAyahSuami->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanAyahSuami->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanAyahSuami->tempat_lahir ?? '-' }},
            {{ tglIndo($hasAktaPerkawinan->perkawinanAyahSuami->tanggal_lahir) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $hasAktaPerkawinan->perkawinanAyahSuami->alamat }},
            {{ $hasAktaPerkawinan->perkawinanAyahSuami->desa_kelurahan }},
            RT {{ $hasAktaPerkawinan->perkawinanAyahSuami->rt }},
            RW {{ $hasAktaPerkawinan->perkawinanAyahSuami->rw }},
            {{ $hasAktaPerkawinan->perkawinanAyahSuami->kabupaten_kota }},
            {{ $hasAktaPerkawinan->perkawinanAyahSuami->kecamatan }},
            {{ $hasAktaPerkawinan->perkawinanAyahSuami->provinsi }},
            {{ $hasAktaPerkawinan->perkawinanAyahSuami->kode_pos }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Telepon</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanAyahSuami->telepon ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Agama</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanAyahSuami->agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanAyahSuami->organisasi_penghayat ?? '-' }}</span>
    </div>
</div>

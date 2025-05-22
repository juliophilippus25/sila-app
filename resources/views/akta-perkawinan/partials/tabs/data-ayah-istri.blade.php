<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanAyahIstri->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanAyahIstri->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanAyahIstri->tempat_lahir ?? '-' }},
            {{ tglIndo($hasAktaPerkawinan->perkawinanAyahIstri->tanggal_lahir) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $hasAktaPerkawinan->perkawinanAyahIstri->alamat }},
            {{ $hasAktaPerkawinan->perkawinanAyahIstri->desa_kelurahan }},
            RT {{ $hasAktaPerkawinan->perkawinanAyahIstri->rt }},
            RW {{ $hasAktaPerkawinan->perkawinanAyahIstri->rw }},
            {{ $hasAktaPerkawinan->perkawinanAyahIstri->kabupaten_kota }},
            {{ $hasAktaPerkawinan->perkawinanAyahIstri->kecamatan }},
            {{ $hasAktaPerkawinan->perkawinanAyahIstri->provinsi }},
            {{ $hasAktaPerkawinan->perkawinanAyahIstri->kode_pos }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Telepon</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanAyahIstri->telepon ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Agama</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanAyahIstri->agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanAyahIstri->organisasi_penghayat ?? '-' }}</span>
    </div>
</div>

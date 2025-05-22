<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIbuIstri->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIbuIstri->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIbuIstri->tempat_lahir ?? '-' }},
            {{ tglIndo($hasAktaPerkawinan->perkawinanIbuIstri->tanggal_lahir) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $hasAktaPerkawinan->perkawinanIbuIstri->alamat }},
            {{ $hasAktaPerkawinan->perkawinanIbuIstri->desa_kelurahan }},
            RT {{ $hasAktaPerkawinan->perkawinanIbuIstri->rt }},
            RW {{ $hasAktaPerkawinan->perkawinanIbuIstri->rw }},
            {{ $hasAktaPerkawinan->perkawinanIbuIstri->kabupaten_kota }},
            {{ $hasAktaPerkawinan->perkawinanIbuIstri->kecamatan }},
            {{ $hasAktaPerkawinan->perkawinanIbuIstri->provinsi }},
            {{ $hasAktaPerkawinan->perkawinanIbuIstri->kode_pos }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Telepon</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIbuIstri->telepon ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Agama</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIbuIstri->agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIbuIstri->organisasi_penghayat ?? '-' }}</span>
    </div>
</div>

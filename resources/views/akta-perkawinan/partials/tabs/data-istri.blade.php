<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIstri->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nomor Paspor</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIstri->nomor_paspor ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIstri->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIstri->tempat_lahir ?? '-' }},
            {{ tglIndo($hasAktaPerkawinan->perkawinanIstri->tanggal_lahir) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $hasAktaPerkawinan->perkawinanIstri->alamat }},
            {{ $hasAktaPerkawinan->perkawinanIstri->desa_kelurahan }},
            RT {{ $hasAktaPerkawinan->perkawinanIstri->rt }},
            RW {{ $hasAktaPerkawinan->perkawinanIstri->rw }},
            {{ $hasAktaPerkawinan->perkawinanIstri->kabupaten_kota }},
            {{ $hasAktaPerkawinan->perkawinanIstri->kecamatan }},
            {{ $hasAktaPerkawinan->perkawinanIstri->provinsi }},
            {{ $hasAktaPerkawinan->perkawinanIstri->kode_pos }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Telepon</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIstri->telepon ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Pendidikan Terakhir</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIstri->pendidikan_terakhir ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Agama</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIstri->agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIstri->organisasi_penghayat ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Anak Ke</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIstri->anak_ke ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Status Perkawinan</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIstri->status_perkawinan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kewarganegaraan</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIstri->kewarganegaraan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kebangsaan</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanIstri->kebangsaan ?? '-' }}</span>
    </div>
</div>

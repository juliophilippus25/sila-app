<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nomor Paspor</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->nomor_paspor ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->tempat_lahir ?? '-' }},
            {{ tglIndo($hasAktaPerkawinan->perkawinanSuami->tanggal_lahir) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $hasAktaPerkawinan->perkawinanSuami->alamat }},
            {{ $hasAktaPerkawinan->perkawinanSuami->desa_kelurahan }},
            RT {{ $hasAktaPerkawinan->perkawinanSuami->rt }},
            RW {{ $hasAktaPerkawinan->perkawinanSuami->rw }},
            {{ $hasAktaPerkawinan->perkawinanSuami->kabupaten_kota }},
            {{ $hasAktaPerkawinan->perkawinanSuami->kecamatan }},
            {{ $hasAktaPerkawinan->perkawinanSuami->provinsi }},
            {{ $hasAktaPerkawinan->perkawinanSuami->kode_pos }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Telepon</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->telepon ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Pendidikan Terakhir</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->pendidikan_terakhir ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Agama</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->organisasi_penghayat ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Anak Ke</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->anak_ke ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Status Perkawinan</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->status_perkawinan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Istri Yang Ke</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->istri_ke ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kewarganegaraan</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->kewarganegaraan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kebangsaan</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->perkawinanSuami->kebangsaan ?? '-' }}</span>
    </div>
</div>

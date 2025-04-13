<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nomor Paspor</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->nomor_paspor ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->tempat_lahir ?? '-' }},
            {{ tglIndo($aktaPerkawinan->perkawinanSuami->tanggal_lahir) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $aktaPerkawinan->perkawinanSuami->alamat }},
            {{ $aktaPerkawinan->perkawinanSuami->desa_kelurahan }},
            RT {{ $aktaPerkawinan->perkawinanSuami->rt }},
            RW {{ $aktaPerkawinan->perkawinanSuami->rw }},
            {{ $aktaPerkawinan->perkawinanSuami->kabupaten_kota }},
            {{ $aktaPerkawinan->perkawinanSuami->kecamatan }},
            {{ $aktaPerkawinan->perkawinanSuami->provinsi }},
            {{ $aktaPerkawinan->perkawinanSuami->kode_pos }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Telepon</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->telepon ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Pendidikan Terakhir</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->pendidikan_terakhir ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Agama</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->organisasi_penghayat ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Anak Ke</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->anak_ke ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Status Perkawinan</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->status_perkawinan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Istri Yang Ke</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->istri_ke ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kewarganegaraan</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->kewarganegaraan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kebangsaan</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanSuami->kebangsaan ?? '-' }}</span>
    </div>
</div>

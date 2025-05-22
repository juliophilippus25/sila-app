<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanAyahSuami->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanAyahSuami->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanAyahSuami->tempat_lahir ?? '-' }},
            {{ tglIndo($aktaPerkawinan->perkawinanAyahSuami->tanggal_lahir) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $aktaPerkawinan->perkawinanAyahSuami->alamat }},
            {{ $aktaPerkawinan->perkawinanAyahSuami->desa_kelurahan }},
            RT {{ $aktaPerkawinan->perkawinanAyahSuami->rt }},
            RW {{ $aktaPerkawinan->perkawinanAyahSuami->rw }},
            {{ $aktaPerkawinan->perkawinanAyahSuami->kabupaten_kota }},
            {{ $aktaPerkawinan->perkawinanAyahSuami->kecamatan }},
            {{ $aktaPerkawinan->perkawinanAyahSuami->provinsi }},
            {{ $aktaPerkawinan->perkawinanAyahSuami->kode_pos }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Telepon</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanAyahSuami->telepon ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Agama</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanAyahSuami->agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanAyahSuami->organisasi_penghayat ?? '-' }}</span>
    </div>
</div>

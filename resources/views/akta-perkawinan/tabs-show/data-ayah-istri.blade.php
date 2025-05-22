<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanAyahIstri->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanAyahIstri->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanAyahIstri->tempat_lahir ?? '-' }},
            {{ tglIndo($aktaPerkawinan->perkawinanAyahIstri->tanggal_lahir) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $aktaPerkawinan->perkawinanAyahIstri->alamat }},
            {{ $aktaPerkawinan->perkawinanAyahIstri->desa_kelurahan }},
            RT {{ $aktaPerkawinan->perkawinanAyahIstri->rt }},
            RW {{ $aktaPerkawinan->perkawinanAyahIstri->rw }},
            {{ $aktaPerkawinan->perkawinanAyahIstri->kabupaten_kota }},
            {{ $aktaPerkawinan->perkawinanAyahIstri->kecamatan }},
            {{ $aktaPerkawinan->perkawinanAyahIstri->provinsi }},
            {{ $aktaPerkawinan->perkawinanAyahIstri->kode_pos }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Telepon</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanAyahIstri->telepon ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Agama</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanAyahIstri->agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanAyahIstri->organisasi_penghayat ?? '-' }}</span>
    </div>
</div>

<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuIstri->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuIstri->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuIstri->tempat_lahir ?? '-' }},
            {{ tglIndo($aktaPerkawinan->perkawinanIbuIstri->tanggal_lahir) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $aktaPerkawinan->perkawinanIbuIstri->alamat }},
            {{ $aktaPerkawinan->perkawinanIbuIstri->desa_kelurahan }},
            RT {{ $aktaPerkawinan->perkawinanIbuIstri->rt }},
            RW {{ $aktaPerkawinan->perkawinanIbuIstri->rw }},
            {{ $aktaPerkawinan->perkawinanIbuIstri->kabupaten_kota }},
            {{ $aktaPerkawinan->perkawinanIbuIstri->kecamatan }},
            {{ $aktaPerkawinan->perkawinanIbuIstri->provinsi }},
            {{ $aktaPerkawinan->perkawinanIbuIstri->kode_pos }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Telepon</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuIstri->telepon ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Agama</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuIstri->agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIbuIstri->organisasi_penghayat ?? '-' }}</span>
    </div>
</div>

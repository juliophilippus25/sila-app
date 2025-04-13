<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIstri->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nomor Paspor</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIstri->nomor_paspor ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIstri->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIstri->tempat_lahir ?? '-' }},
            {{ tglIndo($aktaPerkawinan->perkawinanIstri->tanggal_lahir) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $aktaPerkawinan->perkawinanIstri->alamat }},
            {{ $aktaPerkawinan->perkawinanIstri->desa_kelurahan }},
            RT {{ $aktaPerkawinan->perkawinanIstri->rt }},
            RW {{ $aktaPerkawinan->perkawinanIstri->rw }},
            {{ $aktaPerkawinan->perkawinanIstri->kabupaten_kota }},
            {{ $aktaPerkawinan->perkawinanIstri->kecamatan }},
            {{ $aktaPerkawinan->perkawinanIstri->provinsi }},
            {{ $aktaPerkawinan->perkawinanIstri->kode_pos }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Telepon</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIstri->telepon ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Pendidikan Terakhir</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIstri->pendidikan_terakhir ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Agama</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIstri->agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIstri->organisasi_penghayat ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Anak Ke</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIstri->anak_ke ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Status Perkawinan</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIstri->status_perkawinan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kewarganegaraan</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIstri->kewarganegaraan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kebangsaan</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->perkawinanIstri->kebangsaan ?? '-' }}</span>
    </div>
</div>

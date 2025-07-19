<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirPelapor->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirPelapor->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Lahir/Umur</span>
        <span class="text-gray-900">: {{ tglIndo($aktaLahir->lahirPelapor->tanggal_lahir) }} / {{ $aktaLahir->lahirPelapor->umur ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $aktaLahir->lahirPelapor->alamat }},
            {{ $aktaLahir->lahirPelapor->desa_kelurahan }},
            {{ $aktaLahir->lahirPelapor->kabupaten_kota }},
            {{ $aktaLahir->lahirPelapor->kecamatan }},
            {{ $aktaLahir->lahirPelapor->provinsi }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Pekerjaan</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirPelapor->pekerjaan ?? '-' }}</span>
    </div>
</div>

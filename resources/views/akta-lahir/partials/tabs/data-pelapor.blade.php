<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirPelapor->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirPelapor->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Lahir/Umur</span>
        <span class="text-gray-900">: {{ tglIndo($hasAktaLahir->lahirPelapor->tanggal_lahir) }} / {{ $hasAktaLahir->lahirPelapor->umur ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $hasAktaLahir->lahirPelapor->alamat }},
            {{ $hasAktaLahir->lahirPelapor->desa_kelurahan }},
            {{ $hasAktaLahir->lahirPelapor->kabupaten_kota }},
            {{ $hasAktaLahir->lahirPelapor->kecamatan }},
            {{ $hasAktaLahir->lahirPelapor->provinsi }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Pekerjaan</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirPelapor->pekerjaan ?? '-' }}</span>
    </div>
</div>

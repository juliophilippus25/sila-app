<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirAyah->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirAyah->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Lahir/Umur</span>
        <span class="text-gray-900">: {{ tglIndo($hasAktaLahir->lahirAyah->tanggal_lahir) }} / {{ $hasAktaLahir->lahirAyah->umur ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $hasAktaLahir->lahirAyah->alamat }},
            {{ $hasAktaLahir->lahirAyah->desa_kelurahan }},
            {{ $hasAktaLahir->lahirAyah->kabupaten_kota }},
            {{ $hasAktaLahir->lahirAyah->kecamatan }},
            {{ $hasAktaLahir->lahirAyah->provinsi }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Pekerjaan</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirAyah->pekerjaan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kewarganegaraan</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirAyah->kewarganegaraan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kebangsaan</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirAyah->kebangsaan ?? '-' }}</span>
    </div>
</div>

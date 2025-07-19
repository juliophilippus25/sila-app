<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirAyah->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirAyah->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Lahir/Umur</span>
        <span class="text-gray-900">: {{ tglIndo($aktaLahir->lahirAyah->tanggal_lahir) }} / {{ $aktaLahir->lahirAyah->umur ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $aktaLahir->lahirAyah->alamat }},
            {{ $aktaLahir->lahirAyah->desa_kelurahan }},
            {{ $aktaLahir->lahirAyah->kabupaten_kota }},
            {{ $aktaLahir->lahirAyah->kecamatan }},
            {{ $aktaLahir->lahirAyah->provinsi }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Pekerjaan</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirAyah->pekerjaan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kewarganegaraan</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirAyah->kewarganegaraan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kebangsaan</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirAyah->kebangsaan ?? '-' }}</span>
    </div>
</div>

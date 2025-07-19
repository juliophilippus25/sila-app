<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">NIK</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirIbu->nik ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirIbu->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Lahir/Umur</span>
        <span class="text-gray-900">: {{ tglIndo($hasAktaLahir->lahirIbu->tanggal_lahir) }} / {{ $hasAktaLahir->lahirIbu->umur ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Alamat</span>
        <span class="text-gray-900">:
            {{ $hasAktaLahir->lahirIbu->alamat }},
            {{ $hasAktaLahir->lahirIbu->desa_kelurahan }},
            {{ $hasAktaLahir->lahirIbu->kabupaten_kota }},
            {{ $hasAktaLahir->lahirIbu->kecamatan }},
            {{ $hasAktaLahir->lahirIbu->provinsi }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Pekerjaan</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirIbu->pekerjaan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kewarganegaraan</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirIbu->kewarganegaraan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kebangsaan</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->lahirIbu->kebangsaan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Pencatatan Perkawinan</span>
        <span class="text-gray-900">: {{ tglIndo($hasAktaLahir->lahirIbu->tanggal_pencatatan_perkawinan) }}</span>
    </div>
</div>

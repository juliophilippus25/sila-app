<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirBayiAnak->nama_lengkap ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Jenis Kelamin</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirBayiAnak->jenis_kelamin ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirBayiAnak->tempat_kelahiran ?? '-' }},
            {{ tglIndo($aktaLahir->lahirBayiAnak->tanggal_lahir) }}, Pukul {{ jamIndo($aktaLahir->lahirBayiAnak->pukul ?? '-') }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tempat Dilahirkan</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirBayiAnak->tempat_dilahirkan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Jenis Kelahiran</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirBayiAnak->jenis_kelahiran ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Kelahiran Ke</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirBayiAnak->kelahiran_ke ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Penolong Kelahiran</span>
        <span class="text-gray-900">: {{ $aktaLahir->lahirBayiAnak->penolong_kelahiran ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Ukuran Bayi</span>
        <span class="text-gray-900">: Berat {{ $aktaLahir->lahirBayiAnak->berat_bayi ?? '-' }} kg dan panjang {{ $aktaLahir->lahirBayiAnak->panjang_bayi ?? '-' }} cm</span>
    </div>
</div>

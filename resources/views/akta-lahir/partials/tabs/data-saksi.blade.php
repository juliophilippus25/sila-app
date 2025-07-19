<div class="space-y-2">
    @php
        $saksi1 = json_decode($hasAktaLahir->lahirSaksi->saksi_1 ?? '{}');
        $saksi2 = json_decode($hasAktaLahir->lahirSaksi->saksi_2 ?? '{}');
    @endphp

    <div class="mb-6">
        <h2 class="text-lg font-bold text-gray-900 mb-4">
            {{ __('Data Saksi 1') }}
        </h2>

        <div class="space-y-2">
            <div class="space-y-2">
                <div class="flex">
                    <span class="w-64 font-semibold text-gray-700">NIK</span>
                    <span class="text-gray-900">: {{ $saksi1->nik ?? '-' }}</span>
                </div>
                <div class="flex">
                    <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
                    <span class="text-gray-900">: {{ $saksi1->nama_lengkap ?? '-' }}</span>
                </div>
                <div class="flex">
                    <span class="w-64 font-semibold text-gray-700">Tanggal Lahir/Umur</span>
                    <span class="text-gray-900">: {{ tglIndo($saksi1->tanggal_lahir) }} / {{ $saksi1->umur ?? '-' }}</span>
                </div>
                <div class="flex">
                    <span class="w-64 font-semibold text-gray-700">Alamat</span>
                    <span class="text-gray-900">:
                        {{ $saksi1->alamat }},
                        {{ $saksi1->desa_kelurahan }},
                        {{ $saksi1->kabupaten_kota }},
                        {{ $saksi1->kecamatan }},
                        {{ $saksi1->provinsi }}
                    </span>
                </div>
                <div class="flex">
                    <span class="w-64 font-semibold text-gray-700">Pekerjaan</span>
                    <span class="text-gray-900">: {{ $saksi1->pekerjaan ?? '-' }}</span>
                </div>
            </div>
        </div>

    </div>

    <hr class="my-6">

    <div class="mt-6">
        <h2 class="text-lg font-bold text-gray-900 mb-4">
            {{ __('Data Saksi 2') }}
        </h2>

        <div class="space-y-2">
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">NIK</span>
                <span class="text-gray-900">: {{ $saksi2->nik ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
                <span class="text-gray-900">: {{ $saksi2->nama_lengkap ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Tanggal Lahir/Umur</span>
                <span class="text-gray-900">: {{ tglIndo($saksi2->tanggal_lahir) }} / {{ $saksi2->umur ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Alamat</span>
                <span class="text-gray-900">:
                    {{ $saksi2->alamat }},
                    {{ $saksi2->desa_kelurahan }},
                    {{ $saksi2->kabupaten_kota }},
                    {{ $saksi2->kecamatan }},
                    {{ $saksi2->provinsi }}
                </span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Pekerjaan</span>
                <span class="text-gray-900">: {{ $saksi2->pekerjaan ?? '-' }}</span>
            </div>
        </div>

    </div>
</div>

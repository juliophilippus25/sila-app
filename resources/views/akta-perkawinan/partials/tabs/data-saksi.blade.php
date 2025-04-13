<div class="space-y-2">
    @php
        $saksi1 = json_decode($hasAktaPerkawinan->perkawinanSaksi->saksi_1 ?? '{}');
        $saksi2 = json_decode($hasAktaPerkawinan->perkawinanSaksi->saksi_2 ?? '{}');
    @endphp

    <div class="mb-6">
        <h2 class="text-lg font-bold text-gray-900 mb-4">
            {{ __('Data Saksi 1') }}
        </h2>

        <div class="space-y-2">
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">NIK</span>
                <span class="text-gray-900">: {{ $saksi1->nik ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Nomor Paspor</span>
                <span class="text-gray-900">: {{ $saksi1->nomor_paspor ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
                <span class="text-gray-900">: {{ $saksi1->nama_lengkap ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
                <span class="text-gray-900">: {{ $saksi1->tempat_lahir ?? '-' }},
                    {{ tglIndo($saksi1->tanggal_lahir) }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Alamat</span>
                <span class="text-gray-900">:
                    {{ $saksi1->alamat }},
                    {{ $saksi1->kelurahan }},
                    RT {{ $saksi1->rt }},
                    RW {{ $saksi1->rw }},
                    {{ $saksi1->kabupaten }},
                    {{ $saksi1->kecamatan }},
                    {{ $saksi1->provinsi }},
                    {{ $saksi1->kode_pos }}
                </span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Telepon</span>
                <span class="text-gray-900">: {{ $saksi1->telepon ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Pendidikan Terakhir</span>
                <span class="text-gray-900">: {{ $saksi1->pendidikan_terakhir ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Agama</span>
                <span class="text-gray-900">: {{ $saksi1->agama ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
                <span class="text-gray-900">:
                    {{ $saksi1->organisasi_penghayat ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Anak Ke</span>
                <span class="text-gray-900">: {{ $saksi1->anak_ke ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Status Perkawinan</span>
                <span class="text-gray-900">: {{ $saksi1->status_perkawinan ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Kewarganegaraan</span>
                <span class="text-gray-900">: {{ $saksi1->kewarganegaraan ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Kebangsaan</span>
                <span class="text-gray-900">: {{ $saksi1->kebangsaan ?? '-' }}</span>
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
                <span class="w-64 font-semibold text-gray-700">Nomor Paspor</span>
                <span class="text-gray-900">: {{ $saksi2->nomor_paspor ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Nama Lengkap</span>
                <span class="text-gray-900">: {{ $saksi2->nama_lengkap ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Tempat Tanggal Lahir</span>
                <span class="text-gray-900">: {{ $saksi2->tempat_lahir ?? '-' }},
                    {{ tglIndo($saksi2->tanggal_lahir) }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Alamat</span>
                <span class="text-gray-900">:
                    {{ $saksi2->alamat }},
                    {{ $saksi2->kelurahan }},
                    RT {{ $saksi2->rt }},
                    RW {{ $saksi2->rw }},
                    {{ $saksi2->kabupaten }},
                    {{ $saksi2->kecamatan }},
                    {{ $saksi2->provinsi }},
                    {{ $saksi2->kode_pos }}
                </span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Telepon</span>
                <span class="text-gray-900">: {{ $saksi2->telepon ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Pendidikan Terakhir</span>
                <span class="text-gray-900">: {{ $saksi2->pendidikan_terakhir ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Agama</span>
                <span class="text-gray-900">: {{ $saksi2->agama ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat</span>
                <span class="text-gray-900">:
                    {{ $saksi2->organisasi_penghayat ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Anak Ke</span>
                <span class="text-gray-900">: {{ $saksi2->anak_ke ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Status Perkawinan</span>
                <span class="text-gray-900">: {{ $saksi2->status_perkawinan ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Kewarganegaraan</span>
                <span class="text-gray-900">: {{ $saksi2->kewarganegaraan ?? '-' }}</span>
            </div>
            <div class="flex">
                <span class="w-64 font-semibold text-gray-700">Kebangsaan</span>
                <span class="text-gray-900">: {{ $saksi2->kebangsaan ?? '-' }}</span>
            </div>
        </div>

    </div>
</div>

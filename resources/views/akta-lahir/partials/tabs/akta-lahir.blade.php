<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nomor Akta Lahir</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->nomor_akta ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Keluar Akta</span>
        <span class="text-gray-900">:
            {{ $hasAktaLahir->tanggal_akta ? tglIndo($hasAktaLahir->tanggal_akta) : '-' }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Cetak Akta</span>
        <span class="text-gray-900">:
            {{ $hasAktaLahir->tanggal_cetak ? tglIndo($hasAktaLahir->tanggal_cetak) : '-' }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Diverifikasi Oleh</span>
        <span class="text-gray-900">: {{ $hasAktaLahir->petugas->name ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Entri Data</span>
        <span class="text-gray-900">: {{ tglIndo($hasAktaLahir->created_at) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Status</span>
        <span class="text-gray-900">
            :
            @if ($hasAktaLahir->status == 'pending')
                <span class="text-yellow-500 uppercase font-bold">{{ $hasAktaLahir->status }}</span>
            @elseif($hasAktaLahir->status == 'approved')
                <span class="text-green-500 uppercase font-bold">{{ $hasAktaLahir->status }}</span>
            @elseif($hasAktaLahir->status == 'rejected')
                <span class="text-red-500 uppercase font-bold">{{ $hasAktaLahir->status }}</span>
            @else
                <span>-</span>
            @endif
        </span>
    </div>
    @php
        $fileName = 'akta-lahir-' . \Str::slug($hasAktaLahir->user->name) . '.pdf';
    @endphp

    @if ($hasAktaLahir->status == 'approved')
        <div class="flex">
            <span class="w-64 font-semibold text-gray-700">Download</span>
            <span class="text-gray-900">:
                <a href="#" target="_blank"
                    class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    Lihat PDF
                </a>
            </span>
        </div>
    @endif
</div>

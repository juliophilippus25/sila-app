<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nomor Akta Perkawinan</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->nomor_akta ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Keluar Akta</span>
        <span class="text-gray-900">:
            {{ $hasAktaPerkawinan->tanggal_akta ? tglIndo($hasAktaPerkawinan->tanggal_akta) : '-' }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Cetak Akta</span>
        <span class="text-gray-900">:
            {{ $hasAktaPerkawinan->tanggal_cetak ? tglIndo($hasAktaPerkawinan->tanggal_cetak) : '-' }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Diverifikasi Oleh</span>
        <span class="text-gray-900">: {{ $hasAktaPerkawinan->petugas->name ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Entri Data</span>
        <span class="text-gray-900">: {{ tglIndo($hasAktaPerkawinan->created_at) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Status</span>
        <span class="text-gray-900">
            :
            @if ($hasAktaPerkawinan->status == 'pending')
                <span class="text-yellow-500 uppercase font-bold">{{ $hasAktaPerkawinan->status }}</span>
            @elseif($hasAktaPerkawinan->status == 'approved')
                <span class="text-green-500 uppercase font-bold">{{ $hasAktaPerkawinan->status }}</span>
            @elseif($hasAktaPerkawinan->status == 'rejected')
                <span class="text-red-500 uppercase font-bold">{{ $hasAktaPerkawinan->status }}</span>
            @else
                <span>-</span>
            @endif
        </span>
    </div>
    @php
        $fileName = 'akta-perkawinan-' . \Str::slug($hasAktaPerkawinan->user->name) . '.pdf';
    @endphp

    @if ($hasAktaPerkawinan->status == 'approved')
        <div class="flex">
            <span class="w-64 font-semibold text-gray-700">Download</span>
            <span class="text-gray-900">:
                <a href="{{ route('akta-perkawinan.viewPDF', $hasAktaPerkawinan->id) }}" target="_blank"
                    class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    Lihat PDF
                </a>
            </span>
        </div>
    @endif
</div>

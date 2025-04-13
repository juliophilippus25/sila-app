<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nomor Akta Perkawinan</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->nomor_akta ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Keluar Akta</span>
        <span class="text-gray-900">:
            {{ $aktaPerkawinan->tanggal_akta ? tglIndo($aktaPerkawinan->tanggal_akta) : '-' }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Cetak Akta</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->tanggal_cetak ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Diverifikasi Oleh</span>
        <span class="text-gray-900">: {{ $aktaPerkawinan->petugas->name ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Entri Data</span>
        <span class="text-gray-900">: {{ tglIndo($aktaPerkawinan->created_at) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Status</span>
        <span class="text-gray-900">
            :
            @if ($aktaPerkawinan->status == 'pending')
                <span class="text-yellow-500 uppercase font-bold">{{ $aktaPerkawinan->status }}</span>
            @elseif($aktaPerkawinan->status == 'approved')
                <span class="text-green-500 uppercase font-bold">{{ $aktaPerkawinan->status }}</span>
            @elseif($aktaPerkawinan->status == 'rejected')
                <span class="text-red-500 uppercase font-bold">{{ $aktaPerkawinan->status }}</span>
            @else
                <span>-</span>
            @endif
        </span>
    </div>
</div>

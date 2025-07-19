<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nomor Akta Lahir</span>
        <span class="text-gray-900">: {{ $aktaLahir->nomor_akta ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Keluar Akta</span>
        <span class="text-gray-900">:
            {{ $aktaLahir->tanggal_akta ? tglIndo($aktaLahir->tanggal_akta) : '-' }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Cetak Akta</span>
        <span class="text-gray-900">:
            {{ $aktaLahir->tanggal_cetak ? tglIndo($aktaLahir->tanggal_cetak) : '-' }}
        </span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Diverifikasi Oleh</span>
        <span class="text-gray-900">: {{ $aktaLahir->petugas->name ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Entri Data</span>
        <span class="text-gray-900">: {{ tglIndo($aktaLahir->created_at) }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Status</span>
        <span class="text-gray-900">
            :
            @if ($aktaLahir->status == 'pending')
                <span class="text-yellow-500 uppercase font-bold">{{ $aktaLahir->status }}</span>
            @elseif($aktaLahir->status == 'approved')
                <span class="text-green-500 uppercase font-bold">{{ $aktaLahir->status }}</span>
            @elseif($aktaLahir->status == 'rejected')
                <span class="text-red-500 uppercase font-bold">{{ $aktaLahir->status }}</span>
            @else
                <span>-</span>
            @endif
        </span>
    </div>
</div>

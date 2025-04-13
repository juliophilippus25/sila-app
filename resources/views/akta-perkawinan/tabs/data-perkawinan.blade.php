<div class="space-y-2">
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Pemberkatan Perkawinan</span>
        <span class="text-gray-900">:
            {{ tglIndo($aktaPerkawinan->perkawinanPerkawinan->tanggal_pemberkatan_perkawinan ?? '-') }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Melapor</span>
        <span class="text-gray-900">: {{ tglIndo($aktaPerkawinan->perkawinanPerkawinan->tanggal_melapor ?? '-') }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Pukul</span>
        <span class="text-gray-900">:
            {{ jamIndo($aktaPerkawinan->perkawinanPerkawinan->pukul ?? '-') }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Badan Peradilan</span>
        <span class="text-gray-900">:
            {{ $aktaPerkawinan->perkawinanPerkawinan->nama_badan_peradilan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nomor Putusan Penepatan Peradilan</span>
        <span class="text-gray-900">:
            {{ $aktaPerkawinan->perkawinanPerkawinan->nomor_putusan_pengadilan ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Tanggal Putusan Penepatan Peradilan</span>
        <span class="text-gray-900">:
            {{ tglIndo($aktaPerkawinan->perkawinanPerkawinan->tanggal_putusan ?? '-') }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Pemuka Agama</span>
        <span class="text-gray-900">:
            {{ $aktaPerkawinan->perkawinanPerkawinan->nama_pemuka_agama ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Nama Organisasi Penghayat Kepercayaan</span>
        <span class="text-gray-900">:
            {{ $aktaPerkawinan->perkawinanPerkawinan->organisasi_penghayat ?? '-' }}</span>
    </div>
    <div class="flex">
        <span class="w-64 font-semibold text-gray-700">Ijin Perwakilan bagi WNA / Nomor</span>
        <span class="text-gray-900">:
            {{ $aktaPerkawinan->perkawinanPerkawinan->ijin_perwakilan ?? '-' }}</span>
    </div>
</div>

<div class="mt-8">
    <div class="mt-8">
        <table class="w-full table-auto border-collapse">
            <thead class="text-sm text-muted-2 bg-[#f8f9fa] border-b border-gray-200">
                <tr>
                    <th class="p-4 text-left font-medium">NO</th>
                    <th class="p-4 text-left font-medium">NAMA</th>
                    <th class="p-4 text-left font-medium">NO AKTA</th>
                    <th class="p-4 text-left font-medium">TANGGAL AKTA</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($anakData as $index => $anak)
                    <tr>
                        <td class="p-4">{{ $index + 1 }}</td>
                        <td class="p-4">{{ $anak['nama_anak'] }}</td>
                        <td class="p-4">{{ $anak['no_akta'] }}</td>
                        <td class="p-4">{{ tglIndo($anak['tanggal_akta']) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td class="p-4" colspan="4">
                            <p class="text-center">Tidak ada anak</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

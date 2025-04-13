<div class="mt-8">
    <table class="w-full table-auto border-collapse">
        <thead class="text-sm text-muted-2 bg-[#f8f9fa] border-b border-gray-200">
            <tr>
                <th class="p-4 text-left font-medium">NAMA PERSYARATAN</th>
                <th class="p-4 text-left font-medium">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($persyaratanData as $index => $persyaratan)
                <tr>
                    <td class="p-4">{{ $persyaratan['nama_persyaratan'] }}</td>
                    <td class="p-4">
                        @if ($persyaratan['path'])
                            <!-- Jika path ada, tampilkan link ke file -->
                            <a href="{{ asset('storage/' . $persyaratan['path']) }}" target="_blank"
                                class="text-blue-500 hover:underline">Lihat File</a>
                        @else
                            <!-- Jika tidak ada file, tampilkan keterangan -->
                            <span class="text-gray-500">Tidak ada file</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="p-4" colspan="2">
                        <p class="text-center">Tidak ada persyaratan</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

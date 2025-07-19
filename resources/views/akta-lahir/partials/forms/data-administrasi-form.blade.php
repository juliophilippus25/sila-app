<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Administrasi') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    @php
        $daftarPersyaratan = [
            'Surat Keterangan Lahir dari Dokter/Bidan/Penolong Kelahiran',
            'Akta Nikah/Kutipan Akta Perkawinan (Dilegalisir)',
        ];

        $persyaratanWajib = [
            'Surat Keterangan Lahir dari Dokter/Bidan/Penolong Kelahiran',
            'Akta Nikah/Kutipan Akta Perkawinan (Dilegalisir)',
        ];
    @endphp

    <div class="mt-6 space-y-6">
        <table class="w-full table-auto border-collapse">
            <thead class="text-sm text-muted-2 bg-[#f8f9fa] border-b border-gray-200">
                <tr>
                    <th class="p-4 text-left font-medium">NAMA PERSYARATAN</th>
                    <th class="p-4 text-left font-medium">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarPersyaratan as $i => $namaPersyaratan)
                    <tr>
                        <td class="p-4">
                            <p>
                                {{ $namaPersyaratan }}
                                @if (in_array($namaPersyaratan, $persyaratanWajib))
                                    <span class="text-red-600">*</span>
                                @endif
                            </p>
                            <input type="hidden" name="persyaratan[{{ $i }}][persyaratan]"
                                value="{{ $namaPersyaratan }}"
                                {{ in_array($namaPersyaratan, $persyaratanWajib) ? 'required' : '' }}>
                        </td>
                        <td class="p-4">
                            <input type="file" name="persyaratan[{{ $i }}][file]"
                                class="mt-1 block w-full" accept="image/*,application/pdf">
                            <x-input-error class="mt-2" :messages="$errors->get('persyaratan.' . $i . '.file')" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

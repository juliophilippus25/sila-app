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
            'Fotocopy Surat Nikah Gereja / Vihara / Manakin / Penghayat Kepercayaan / Salinan Penetapan Pengadilan yang telah di Legalisir',
            'Fotocopy Kutipan Akta Kelahiran Suami Istri',
            'Surat Keterangan dari Desa/Kelurahan',
            'Fotocopy KTP Suami Istri dan Kartu Keluarga',
            'Pas Photo Berdampingan ukuran 4x6 cm sebanyak 3 (tiga) lembar',
            '2 (dua) orang saksi yang telah berusia 21 tahun keatas',
            'Fotocopy Kutipan Akta Kelahiran Anak yang akan diakui / disyahkan',
            'Fotocopy Akta Perceraian/Kematian jika yang bersangkutan telah pernah kawin',
            'Ijin dari Komandan bagi anggota TNI/POLRI',
            'Perjanjian Perkawinan',
            'STMD dari Kepolisian',
            'Surat ijin dari Isteri bagi yang berpoligami',
            'Surat ijin dari Pengadilan Negeri bagi yang berpoligami',
            'Surat ijin dari Perwakilan Negara Asing yang bersangkutan',
            'Paspor / dokumen Keimigrasian',
            'SKTT dari Dinas Kependudukan dan Catatan Sipil',
        ];

        $persyaratanWajib = [
            'Fotocopy Surat Nikah Gereja / Vihara / Manakin / Penghayat Kepercayaan / Salinan Penetapan Pengadilan yang telah di Legalisir',
            'Fotocopy Kutipan Akta Kelahiran Suami Istri',
            'Surat Keterangan dari Desa/Kelurahan',
            'Fotocopy KTP Suami Istri dan Kartu Keluarga',
            'Pas Photo Berdampingan ukuran 4x6 cm sebanyak 3 (tiga) lembar',
            '2 (dua) orang saksi yang telah berusia 21 tahun keatas',
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
                            <p>{{ $namaPersyaratan }}</p>
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

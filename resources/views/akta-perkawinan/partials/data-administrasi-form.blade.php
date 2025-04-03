<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Administrasi') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    <div class="mt-6 space-y-6">
        <table class="w-full table-auto border-collapse">
            <thead class="text-sm text-muted-2 bg-[#f8f9fa] border-b border-gray-200">
                <tr>
                    <th class="p-4 text-left font-medium">NAMA PERSYARATAN</th>
                    <th class="p-4 text-left font-medium">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-4">
                        <p>
                            Fotocopy Surat Nikah Gereja / Vihara / Manakin / Penghayat Kepercayaan / Salinan
                            Penetapan Pengadilan yang telah di <b>Legalisir</b>
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            Fotocopy Kutipan Akta Kelahiran Suami Istri
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            Surat Keterangan dari Desa/Kelurahan
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            Fotocopy KTP Suami Istri dan Kartu Keluarga
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            Pas Photo Berdampingan ukuran 4x6 cm sebanyak 3 (tiga) lembar
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            2 (dua) orang saksi yang telah berusia 21 tahun keatas
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            Fotocopy Kutipan Akta Kelahiran Anak yang akan diakui / disyahkan
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            Fotocopy Akta Perceraian/Kematian jika yang bersangkutan telah pernah kawin
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            Ijin dari Komandan bagi anggota TNI/POLRI
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            Perjanjian Perkawinan
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            STMD dari Kepolisian
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            Surat ijin dari Isteri bagi yang berpoligami
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            Surat ijin dari Pengadilan Negeri bagi yang berpoligami
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            Surat ijin dari Perwakilan Negara Asing yang bersangkutan
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            Paspor / dokumen Keimigrasian
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
                <tr>
                    <td class="p-4">
                        <p>
                            SKTT dari Dinas Kependudukan dan Catatan Sipil
                        </p>
                    </td>
                    <td class="p-4">
                        <input type="file" class="mt-1 block w-full">
                        <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

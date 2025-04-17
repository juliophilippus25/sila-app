<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Perkawinan') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    <div class="mt-6 space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div>
                <x-input-label for="dp_tanggal_pemberkatan_perkawinan" :value="__('Tanggal Pemberkatan Perkawinan')" />
                <x-text-input id="dp_tanggal_pemberkatan_perkawinan" name="dp_tanggal_pemberkatan_perkawinan"
                    type="date" class="mt-1 block w-full" :value="old('dp_tanggal_pemberkatan_perkawinan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_tanggal_pemberkatan_perkawinan')" />
            </div>

            <div>
                <x-input-label for="dp_tanggal_melapor" :value="__('Tanggal Melapor')" />
                <x-text-input id="dp_tanggal_melapor" name="dp_tanggal_melapor" type="date" class="mt-1 block w-full"
                    :value="old('dp_tanggal_melapor')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_tanggal_melapor')" />
            </div>

            <div>
                <x-input-label for="dp_pukul" :value="__('Pukul')" />
                <x-text-input id="dp_pukul" name="dp_pukul" type="time" class="mt-1 block w-full"
                    :value="old('dp_pukul')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_pukul')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div>
                <x-select name="dp_agama" label="Agama" :options="$agama" placeholder="Pilih Agama"
                    :selected="old('dp_agama')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_agama')" />
            </div>

            <div>
                <x-input-label for="dp_organisasi_penghayat" :value="__('Nama Organisasi Penghayat Kepercayaan')" />
                <x-text-input id="dp_organisasi_penghayat" name="dp_organisasi_penghayat" type="text"
                    class="mt-1 block w-full" :value="old('dp_organisasi_penghayat')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_organisasi_penghayat')" />
            </div>

            <div>
                <x-input-label for="dp_nama_pemuka_agama" :value="__('Nama Pemuka Agama')" />
                <x-text-input id="dp_nama_pemuka_agama" name="dp_nama_pemuka_agama" type="text"
                    class="mt-1 block w-full" :value="old('dp_nama_pemuka_agama')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_nama_pemuka_agama')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div>
                <x-input-label for="dp_nama_badan_peradilan" :value="__('Nama Badan Peradilan')" />
                <x-text-input id="dp_nama_badan_peradilan" name="dp_nama_badan_peradilan" type="text"
                    class="mt-1 block w-full" :value="old('dp_nama_badan_peradilan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_nama_badan_peradilan')" />
            </div>

            <div>
                <x-input-label for="dp_no_putusan_pengadilan" :value="__('Nomor Putusan Penetapan Pengadilan')" />
                <x-text-input id="dp_no_putusan_pengadilan" name="dp_no_putusan_pengadilan" type="text"
                    class="mt-1 block w-full" :value="old('dp_no_putusan_pengadilan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_no_putusan_pengadilan')" />
            </div>

            <div>
                <x-input-label for="dp_tanggal_putusan" :value="__('Tanggal Putusan Penetapan Pengadilan')" />
                <x-text-input id="dp_tanggal_putusan" name="dp_tanggal_putusan" type="date" class="mt-1 block w-full"
                    :value="old('dp_tanggal_putusan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_tanggal_putusan')" />
            </div>
        </div>

        <div>
            <x-input-label for="dp_ijin_perwakilan" :value="__('Ijin Perwakilan bagi WNA/Nomor')" />
            <x-text-input id="dp_ijin_perwakilan" name="dp_ijin_perwakilan" type="text" class="mt-1 block w-full"
                :value="old('dp_ijin_perwakilan')" />
            <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
        </div>

        @php
            $anakOld = old('anak', []);
        @endphp

        <div>
            <x-input-label for="dp_jumlah_anak" :value="__('Jumlah Anak Yang Telah Diakui dan Disahkan')" />
            <x-text-input id="dp_jumlah_anak" name="dp_jumlah_anak" type="number" class="mt-1 block w-1/4"
                :value="old('dp_jumlah_anak', count($anakOld))" min="0" step="1" oninput="generateAnakForms()" />
            <x-input-error class="mt-2" :messages="$errors->get('dp_jumlah_anak')" />
        </div>

        <div id="anak-forms-container">
            @foreach ($anakOld as $i => $anak)
                <div class="border p-4 mb-4 rounded-md anak-form">
                    <h3 class="font-bold">Anak Ke {{ $i + 1 }}</h3>

                    <div>
                        <x-input-label for="dp_nama_anak_{{ $i }}" :value="__('Nama Anak')" />
                        <x-text-input id="dp_nama_anak_{{ $i }}" name="anak[{{ $i }}][nama_anak]"
                            type="text" class="mt-1 block w-full" :value="old("anak.$i.nama_anak")" />
                        <x-input-error class="mt-2" :messages="$errors->get("anak.$i.nama_anak")" />
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-2">
                        <div>
                            <x-input-label for="dp_no_akta_lahir_{{ $i }}" :value="__('Nomor Akta Kelahiran')" />
                            <x-text-input id="dp_no_akta_lahir_{{ $i }}"
                                name="anak[{{ $i }}][no_akta]" type="text" class="mt-1 block w-full"
                                :value="old("anak.$i.no_akta")" />
                            <x-input-error class="mt-2" :messages="$errors->get("anak.$i.no_akta")" />
                        </div>

                        <div>
                            <x-input-label for="dp_tanggal_akta_lahir_{{ $i }}" :value="__('Tanggal Akta Kelahiran')" />
                            <x-text-input id="dp_tanggal_akta_lahir_{{ $i }}"
                                name="anak[{{ $i }}][tanggal_akta]" type="date" class="mt-1 block w-full"
                                :value="old("anak.$i.tanggal_akta")" />
                            <x-input-error class="mt-2" :messages="$errors->get("anak.$i.tanggal_akta")" />
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <script>
            function generateAnakForms() {
                const jumlahAnak = parseInt(document.getElementById('dp_jumlah_anak').value) || 0;
                const container = document.getElementById('anak-forms-container');

                // Hapus semua form anak sebelumnya
                container.innerHTML = '';

                for (let i = 0; i < jumlahAnak; i++) {
                    const anakWrapper = document.createElement('div');
                    anakWrapper.classList.add('border', 'p-4', 'mb-4', 'rounded-md');
                    anakWrapper.innerHTML = `
                <h3 class="font-bold">Anak Ke ${i + 1}</h3>

                <div>
                    <label for="dp_nama_anak_${i}">Nama Anak</label>
                    <input id="dp_nama_anak_${i}" name="anak[${i}][nama_anak]" type="text"
                        class="mt-1 block w-full">
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-2">
                    <div>
                        <label for="dp_no_akta_lahir_${i}">Nomor Akta Kelahiran</label>
                        <input id="dp_no_akta_lahir_${i}" name="anak[${i}][no_akta]" type="text"
                            class="mt-1 block w-full">
                    </div>

                    <div>
                        <label for="dp_tanggal_akta_lahir_${i}">Tanggal Akta Kelahiran</label>
                        <input id="dp_tanggal_akta_lahir_${i}" name="anak[${i}][tanggal_akta]" type="date"
                            class="mt-1 block w-full">
                    </div>
                </div>
            `;
                    container.appendChild(anakWrapper);
                }
            }

            // Jalankan saat load halaman, jika jumlah anak > 0 dan tidak ada old anak
            document.addEventListener('DOMContentLoaded', () => {
                const jumlahInput = document.getElementById('dp_jumlah_anak');
                const jumlahAnak = parseInt(jumlahInput.value) || 0;
                const anakFormsExist = document.querySelectorAll('.anak-form').length > 0;

                if (jumlahAnak > 0 && !anakFormsExist) {
                    generateAnakForms();
                }
            });
        </script>


    </div>
</section>

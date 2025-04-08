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
                <x-input-label for="dp_tanggal_pemberkatan" :value="__('Tanggal Pemberkatan Perkawinan')" />
                <x-text-input id="dp_tanggal_pemberkatan" name="dp_tanggal_pemberkatan" type="date"
                    class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_tanggal_pemberkatan')" />
            </div>

            <div>
                <x-input-label for="dp_tanggal_melapor" :value="__('Tanggal Melapor')" />
                <x-text-input id="dp_tanggal_melapor" name="dp_tanggal_melapor" type="date"
                    class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_tanggal_melapor')" />
            </div>

            <div>
                <x-input-label for="dp_pukul" :value="__('Pukul')" />
                <x-text-input id="dp_pukul" name="dp_pukul" type="time" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_pukul')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div>
                <x-select name="dp_agama" label="Agama" :options="$agama" placeholder="Pilih Agama" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_agama')" />
            </div>

            <div>
                <x-input-label for="dp_organisasi_penghayat" :value="__('Nama Organisasi Penghayat Kepercayaan')" />
                <x-text-input id="dp_organisasi_penghayat" name="dp_organisasi_penghayat" type="text"
                    class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_organisasi_penghayat')" />
            </div>

            <div>
                <x-input-label for="dp_nama_pemuka_agama" :value="__('Nama Pemuka Agama')" />
                <x-text-input id="dp_nama_pemuka_agama" name="dp_nama_pemuka_agama" type="text"
                    class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_nama_pemuka_agama')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div>
                <x-input-label for="dp_badan_peradilan" :value="__('Nama Badan Peradilan')" />
                <x-text-input id="dp_badan_peradilan" name="dp_badan_peradilan" type="text"
                    class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_badan_peradilan')" />
            </div>

            <div>
                <x-input-label for="dp_no_putusan_pengadilan" :value="__('Nomor Putusan Penetapan Pengadilan')" />
                <x-text-input id="dp_no_putusan_pengadilan" name="dp_no_putusan_pengadilan" type="text"
                    class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_no_putusan_pengadilan')" />
            </div>

            <div>
                <x-input-label for="dp_tanggal_putusan" :value="__('Tanggal Putusan Penetapan Pengadilan')" />
                <x-text-input id="dp_tanggal_putusan" name="dp_tanggal_putusan" type="date"
                    class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_tanggal_putusan')" />
            </div>
        </div>

        <div>
            <x-input-label for="dp_ijin_perwakilan" :value="__('Ijin Perwakilan bagi WNA/Nomor')" />
            <x-text-input id="dp_ijin_perwakilan" name="dp_ijin_perwakilan" type="text" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('dp_ijin_perwakilan')" />
        </div>

        <div>
            <x-input-label for="dp_jumlah_anak" :value="__('Jumlah Anak Yang Telah Diakui dan Disahkan')" />
            <x-text-input id="dp_jumlah_anak" name="dp_jumlah_anak" type="number" class="mt-1 block w-1/4"
                min="0" step="1" oninput="generateAnakForms()" />
            <x-input-error class="mt-2" :messages="$errors->get('dp_jumlah_anak')" />
        </div>

        <div id="anak-forms-container"></div>

        <script>
            function generateAnakForms() {
                const jumlahAnak = document.getElementById('dp_jumlah_anak').value;
                const container = document.getElementById('anak-forms-container');
                container.innerHTML = '';

                for (let i = 1; i <= jumlahAnak; i++) {
                    const anakWrapper = document.createElement('div');
                    anakWrapper.classList.add('border', 'p-4', 'mb-4', 'rounded-md');
                    anakWrapper.innerHTML = `
                        <h3 class="font-bold">Anak Ke ${i}</h3>

                        <div>
                            <x-input-label for="dp_nama_anak_${i}" :value="__('Nama Anak')" />
                            <x-text-input id="dp_nama_anak_${i}" name="dp_nama_anak[${i}]" type="text" class="mt-1 block w-full" />
                            <x-input-error class="mt-2" :messages="$errors->get('dp_nama_anak_${i}')" />
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-2">
                            <div>
                                <x-input-label for="dp_no_akta_lahir_${i}" :value="__('Nomor Akta Kelahiran')" />
                                <x-text-input id="dp_no_akta_lahir_${i}" name="dp_no_akta_lahir[${i}]" type="text" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('dp_no_akta_lahir_${i}')" />
                            </div>

                            <div>
                                <x-input-label for="dp_tanggal_akta_lahir_${i}" :value="__('Tanggal Akta Kelahiran')" />
                                <x-text-input id="dp_tanggal_akta_lahir_${i}" name="dp_tanggal_akta_lahir[${i}]" type="date" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('dp_tanggal_akta_lahir_${i}')" />
                            </div>
                        </div>
                    `;
                    container.appendChild(anakWrapper);
                }
            }
        </script>


    </div>
</section>

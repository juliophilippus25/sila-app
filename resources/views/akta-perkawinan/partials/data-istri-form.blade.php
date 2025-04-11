<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Istri') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="di_nik" :value="__('Nomor Induk Kependudukan (NIK)')" />
            <x-text-input id="di_nik" name="di_nik" type="text" class="mt-1 block w-full" required />
            <x-input-error class="mt-2" :messages="$errors->get('di_nik')" />
        </div>

        <div>
            <x-input-label for="di_no_Kk" :value="__('Nomor Kartu Keluarga (Nomor KK)')" />
            <x-text-input id="di_no_Kk" name="di_no_Kk" type="text" class="mt-1 block w-full" required />
            <x-input-error class="mt-2" :messages="$errors->get('di_no_Kk')" />
        </div>

        <div>
            <x-input-label for="di_no_paspor" :value="__('Nomor Paspor')" />
            <x-text-input id="di_no_paspor" name="di_no_paspor" type="text" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('di_no_paspor')" />
        </div>

        <div>
            <x-input-label for="di_nama_lengkap" :value="__('Nama Lengkap')" />
            <x-text-input id="di_nama_lengkap" name="di_nama_lengkap" type="text" class="mt-1 block w-full"
                required />
            <x-input-error class="mt-2" :messages="$errors->get('di_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="di_tempat_lahir" :value="__('Tempat Lahir')" />
                <x-text-input id="di_tempat_lahir" name="di_tempat_lahir" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('di_tempat_lahir')" />
            </div>

            <div>
                <x-input-label for="di_tanggal_lahir" :value="__('Tanggal Lahir')" />
                <x-text-input id="di_tanggal_lahir" name="di_tanggal_lahir" type="date" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('di_tanggal_lahir')" />
            </div>
        </div>

        <div>
            <x-input-label for="di_alamat" :value="__('Alamat')" />
            <x-text-input id="di_alamat" name="di_alamat" type="text" class="mt-1 block w-full" required />
            <x-input-error class="mt-2" :messages="$errors->get('di_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="di_rt" :value="__('RT')" />
                <x-text-input id="di_rt" name="di_rt" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('di_rt')" />
            </div>

            <div>
                <x-input-label for="di_rw" :value="__('RW')" />
                <x-text-input id="di_rw" name="di_rw" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('di_rw')" />
            </div>

            <div>
                <x-input-label for="di_kode_pos" :value="__('Kode Pos')" />
                <x-text-input id="di_kode_pos" name="di_kode_pos" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('di_kode_pos')" />
            </div>

            <div>
                <x-input-label for="di_telepon" :value="__('Telepon')" />
                <x-text-input id="di_telepon" name="di_telepon" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('di_telepon')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="di_kelurahan" :value="__('Desa/Kelurahan')" />
                <x-text-input id="di_kelurahan" name="di_kelurahan" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('di_kelurahan')" />
            </div>

            <div>
                <x-input-label for="di_kecamatan" :value="__('Kecamatan')" />
                <x-text-input id="di_kecamatan" name="di_kecamatan" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('di_kecamatan')" />
            </div>

            <div>
                <x-input-label for="di_kabupaten" :value="__('Kabupaten/Kota')" />
                <x-text-input id="di_kabupaten" name="di_kabupaten" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('di_kabupaten')" />
            </div>

            <div>
                <x-input-label for="di_provinsi" :value="__('Provinsi')" />
                <x-text-input id="di_provinsi" name="di_provinsi" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('di_provinsi')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="di_pendidikan_terakhir" label="Pendidikan Terakhir" :options="$pendidikanTerakhir"
                    placeholder="Pilih Pendidikan Terakhir" />
                <x-input-error class="mt-2" :messages="$errors->get('di_pendidikan_terakhir')" required />
            </div>

            <div>
                <x-select name="di_agama" label="Agama" :options="$agama" placeholder="Pilih Agama" required />
                <x-input-error class="mt-2" :messages="$errors->get('di_agama')" />
            </div>
        </div>

        <div>
            <x-input-label for="di_organisasi_penghayat" :value="__('Nama Organisasi Penghayat Kepercayaan')" />
            <x-text-input id="di_organisasi_penghayat" name="di_organisasi_penghayat" type="text"
                class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('di_organisasi_penghayat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="di_pekerjaan" label="Pekerjaan" :options="$pekerjaan" placeholder="Pilih Pekerjaan"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('di_pekerjaan')" />
            </div>

            <div>
                <x-input-label for="di_anak_ke" :value="__('Anak Ke')" />
                <x-text-input id="di_anak_ke" name="di_anak_ke" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('di_anak_ke')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="di_status_perkawinan" label="Status Perkawinan Sebelum Nikah" :options="$statusPerkawinan"
                    placeholder="Pilih Status Perkawinan" required />
                <x-input-error class="mt-2" :messages="$errors->get('di_status_perkawinan')" />
            </div>

            <div>
                <x-input-label for="di_perkawinan_ke" :value="__('Perkawinan Yang Ke')" />
                <x-text-input id="di_perkawinan_ke" name="di_perkawinan_ke" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('di_perkawinan_ke')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="di_kewarganegaraan" label="Kewarganegaraan" :options="$kewarganegaraan"
                    placeholder="Pilih Status Kewarganegaraan" required />
                <x-input-error class="mt-2" :messages="$errors->get('di_kewarganegaraan')" />
            </div>

            <div>
                <x-input-label for="di_kebangsaan" :value="__('Kebangsaan (bagi WNA)')" />
                <x-text-input id="di_kebangsaan" name="di_kebangsaan" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('di_kebangsaan')" />
            </div>
        </div>

    </div>
</section>

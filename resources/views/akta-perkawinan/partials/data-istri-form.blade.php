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
            <x-input-label for="ds_nik" :value="__('Nomor Induk Kependudukan (NIK)')" />
            <x-text-input id="ds_nik" name="ds_nik" type="text" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_nik')" />
        </div>

        <div>
            <x-input-label for="ds_no_Kk" :value="__('Nomor Kartu Keluarga (Nomor KK)')" />
            <x-text-input id="ds_no_Kk" name="ds_no_Kk" type="text" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_no_Kk')" />
        </div>

        <div>
            <x-input-label for="ds_no_paspor" :value="__('Nomor Paspor')" />
            <x-text-input id="ds_no_paspor" name="ds_no_paspor" type="text" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_no_paspor')" />
        </div>

        <div>
            <x-input-label for="ds_nama_lengkap" :value="__('Nama Lengkap')" />
            <x-text-input id="ds_nama_lengkap" name="ds_nama_lengkap" type="text" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="ds_tempat_lahir" :value="__('Tempat Lahir')" />
                <x-text-input id="ds_tempat_lahir" name="ds_tempat_lahir" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_tempat_lahir')" />
            </div>

            <div>
                <x-input-label for="ds_tanggal_lahir" :value="__('Tanggal Lahir')" />
                <x-text-input id="ds_tanggal_lahir" name="ds_tanggal_lahir" type="date" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_tanggal_lahir')" />
            </div>
        </div>

        <div>
            <x-input-label for="ds_alamat" :value="__('Alamat')" />
            <x-text-input id="ds_alamat" name="ds_alamat" type="text" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="ds_rt" :value="__('RT')" />
                <x-text-input id="ds_rt" name="ds_rt" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_rt')" />
            </div>

            <div>
                <x-input-label for="ds_rw" :value="__('RW')" />
                <x-text-input id="ds_rw" name="ds_rw" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_rw')" />
            </div>

            <div>
                <x-input-label for="ds_kode_pos" :value="__('Kode Pos')" />
                <x-text-input id="ds_kode_pos" name="ds_kode_pos" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_kode_pos')" />
            </div>

            <div>
                <x-input-label for="ds_telepon" :value="__('Telepon')" />
                <x-text-input id="ds_telepon" name="ds_telepon" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_telepon')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="ds_kelurahan" :value="__('Desa/Kelurahan')" />
                <x-text-input id="ds_kelurahan" name="ds_kelurahan" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_kelurahan')" />
            </div>

            <div>
                <x-input-label for="ds_kecamatan" :value="__('Kecamatan')" />
                <x-text-input id="ds_kecamatan" name="ds_kecamatan" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_kecamatan')" />
            </div>

            <div>
                <x-input-label for="ds_kabupaten" :value="__('Kabupaten/Kota')" />
                <x-text-input id="ds_kabupaten" name="ds_kabupaten" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_kabupaten')" />
            </div>

            <div>
                <x-input-label for="ds_provinsi" :value="__('Provinsi')" />
                <x-text-input id="ds_provinsi" name="ds_provinsi" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_provinsi')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="ds_pendidikan_terakhir" label="Pendidikan Terakhir" :options="$pendidikanTerakhir"
                    placeholder="Pilih Pendidikan Terakhir" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_pendidikan_terakhir')" />
            </div>

            <div>
                <x-select name="ds_agama" label="Agama" :options="$agama" placeholder="Pilih Agama" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_agama')" />
            </div>
        </div>

        <div>
            <x-input-label for="ds_organisasi_penghayat" :value="__('Nama Organisasi Penghayat Kepercayaan')" />
            <x-text-input id="ds_organisasi_penghayat" name="ds_organisasi_penghayat" type="text"
                class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_organisasi_penghayat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="ds_pekerjaan" label="Pekerjaan" :options="$pekerjaan" placeholder="Pilih Pekerjaan" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_pekerjaan')" />
            </div>

            <div>
                <x-input-label for="ds_anak_ke" :value="__('Anak Ke')" />
                <x-text-input id="ds_anak_ke" name="ds_anak_ke" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_anak_ke')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="ds_status_perkawinan" label="Status Perkawinan Sebelum Nikah" :options="$statusPerkawinan"
                    placeholder="Pilih Status Perkawinan" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_status_perkawinan')" />
            </div>

            <div>
                <x-input-label for="ds_perkawinan_ke" :value="__('Perkawinan Yang Ke')" />
                <x-text-input id="ds_perkawinan_ke" name="ds_perkawinan_ke" type="text"
                    class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_perkawinan_ke')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="ds_kewarganegaraan" label="Kewarganegaraan" :options="$kewarganegaraan"
                    placeholder="Pilih Status Kewarganegaraan" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_kewarganegaraan')" />
            </div>

            <div>
                <x-input-label for="ds_kebangsaan" :value="__('Kebangsaan (bagi WNA)')" />
                <x-text-input id="ds_kebangsaan" name="ds_kebangsaan" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_kebangsaan')" />
            </div>
        </div>

    </div>
</section>

<section>
    {{-- <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Saksi') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header> --}}

    <div class="mt-6 space-y-6">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Saksi 1') }}
        </h2>

        <div>
            <x-input-label for="ds_1_nik" :value="__('Nomor Induk Kependudukan (NIK)')" />
            <x-text-input id="ds_1_nik" name="ds_1[nik]" type="text" class="mt-1 block w-full" required />
            <x-input-error class="mt-2" :messages="$errors->get('ds_1_nik')" />
        </div>

        <div>
            <x-input-label for="ds_1_nama_lengkap" :value="__('Nama Lengkap')" />
            <x-text-input id="ds_1_nama_lengkap" name="ds_1[nama_lengkap]" type="text" class="mt-1 block w-full"
                required />
            <x-input-error class="mt-2" :messages="$errors->get('ds_1_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="ds_1_tempat_lahir" :value="__('Tempat Lahir')" />
                <x-text-input id="ds_1_tempat_lahir" name="ds_1[tempat_lahir]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1_tempat_lahir')" />
            </div>

            <div>
                <x-input-label for="ds_1_tanggal_lahir" :value="__('Tanggal Lahir')" />
                <x-text-input id="ds_1_tanggal_lahir" name="ds_1[tanggal_lahir]" type="date"
                    class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1_tanggal_lahir')" />
            </div>
        </div>

        <div>
            <x-input-label for="ds_1_alamat" :value="__('Alamat')" />
            <x-text-input id="ds_1_alamat" name="ds_1[alamat]" type="text" class="mt-1 block w-full" required />
            <x-input-error class="mt-2" :messages="$errors->get('ds_1_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="ds_1_rt" :value="__('RT')" />
                <x-text-input id="ds_1_rt" name="ds_1[rt]" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1_rt')" />
            </div>

            <div>
                <x-input-label for="ds_1_rw" :value="__('RW')" />
                <x-text-input id="ds_1_rw" name="ds_1[rw]" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1_rw')" />
            </div>

            <div>
                <x-input-label for="ds_1_kode_pos" :value="__('Kode Pos')" />
                <x-text-input id="ds_1_kode_pos" name="ds_1[kode_pos]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1_kode_pos')" />
            </div>

            <div>
                <x-input-label for="ds_1_telepon" :value="__('Telepon')" />
                <x-text-input id="ds_1_telepon" name="ds_1[telepon]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1_telepon')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="ds_1_kelurahan" :value="__('Desa/Kelurahan')" />
                <x-text-input id="ds_1_kelurahan" name="ds_1[kelurahan]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1_kelurahan')" />
            </div>

            <div>
                <x-input-label for="ds_1_kecamatan" :value="__('Kecamatan')" />
                <x-text-input id="ds_1_kecamatan" name="ds_1[kecamatan]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1_kecamatan')" />
            </div>

            <div>
                <x-input-label for="ds_1_kabupaten" :value="__('Kabupaten/Kota')" />
                <x-text-input id="ds_1_kabupaten" name="ds_1[kabupaten]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1_kabupaten')" />
            </div>

            <div>
                <x-input-label for="ds_1_provinsi" :value="__('Provinsi')" />
                <x-text-input id="ds_1_provinsi" name="ds_1[provinsi]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1_provinsi')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="ds_1[pekerjaan]" label="Pekerjaan" :options="$pekerjaan" placeholder="Pilih Pekerjaan"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1_pekerjaan')" />
            </div>

            <div>
                <x-select name="ds_1[agama]" label="Agama" :options="$agama" placeholder="Pilih Agama" required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1_agama')" />
            </div>
        </div>

        <div>
            <x-input-label for="ds_1_organisasi_penghayat" :value="__('Nama Organisasi Penghayat Kepercayaan')" />
            <x-text-input id="ds_1_organisasi_penghayat" name="ds_1[organisasi_penghayat]" type="text"
                class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_1_organisasi_penghayat')" />
        </div>
    </div>

    <div class="mt-6 space-y-6">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Saksi 2') }}
        </h2>

        <div>
            <x-input-label for="ds_2_nik" :value="__('Nomor Induk Kependudukan (NIK)')" />
            <x-text-input id="ds_2_nik" name="ds_2[nik]" type="text" class="mt-1 block w-full" required />
            <x-input-error class="mt-2" :messages="$errors->get('ds_2_nik')" />
        </div>

        <div>
            <x-input-label for="ds_2_nama_lengkap" :value="__('Nama Lengkap')" />
            <x-text-input id="ds_2_nama_lengkap" name="ds_2[nama_lengkap]" type="text" class="mt-1 block w-full"
                required />
            <x-input-error class="mt-2" :messages="$errors->get('ds_2_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="ds_2_tempat_lahir" :value="__('Tempat Lahir')" />
                <x-text-input id="ds_2_tempat_lahir" name="ds_2[tempat_lahir]" type="text"
                    class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2_tempat_lahir')" />
            </div>

            <div>
                <x-input-label for="ds_2_tanggal_lahir" :value="__('Tanggal Lahir')" />
                <x-text-input id="ds_2_tanggal_lahir" name="ds_2[tanggal_lahir]" type="date"
                    class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2_tanggal_lahir')" />
            </div>
        </div>

        <div>
            <x-input-label for="ds_2_alamat" :value="__('Alamat')" />
            <x-text-input id="ds_2_alamat" name="ds_2[alamat]" type="text" class="mt-1 block w-full" required />
            <x-input-error class="mt-2" :messages="$errors->get('ds_2_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="ds_2_rt" :value="__('RT')" />
                <x-text-input id="ds_2_rt" name="ds_2[rt]" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2_rt')" />
            </div>

            <div>
                <x-input-label for="ds_2_rw" :value="__('RW')" />
                <x-text-input id="ds_2_rw" name="ds_2[rw]" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2_rw')" />
            </div>

            <div>
                <x-input-label for="ds_2_kode_pos" :value="__('Kode Pos')" />
                <x-text-input id="ds_2_kode_pos" name="ds_2[kode_pos]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2_kode_pos')" />
            </div>

            <div>
                <x-input-label for="ds_2_telepon" :value="__('Telepon')" />
                <x-text-input id="ds_2_telepon" name="ds_2[telepon]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2_telepon')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="ds_2_kelurahan" :value="__('Desa/Kelurahan')" />
                <x-text-input id="ds_2_kelurahan" name="ds_2[kelurahan]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2_kelurahan')" />
            </div>

            <div>
                <x-input-label for="ds_2_kecamatan" :value="__('Kecamatan')" />
                <x-text-input id="ds_2_kecamatan" name="ds_2[kecamatan]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2_kecamatan')" />
            </div>

            <div>
                <x-input-label for="ds_2_kabupaten" :value="__('Kabupaten/Kota')" />
                <x-text-input id="ds_2_kabupaten" name="ds_2[kabupaten]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2_kabupaten')" />
            </div>

            <div>
                <x-input-label for="ds_2_provinsi" :value="__('Provinsi')" />
                <x-text-input id="ds_2_provinsi" name="ds_2[provinsi]" type="text" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2_provinsi')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="ds_2[pekerjaan]" label="Pekerjaan" :options="$pekerjaan"
                    placeholder="Pilih Pekerjaan" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2_pekerjaan')" />
            </div>

            <div>
                <x-select name="ds_2[agama]" label="Agama" :options="$agama" placeholder="Pilih Agama" required />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2_agama')" />
            </div>
        </div>

        <div>
            <x-input-label for="ds_2_organisasi_penghayat" :value="__('Nama Organisasi Penghayat Kepercayaan')" />
            <x-text-input id="ds_2_organisasi_penghayat" name="ds_2[organisasi_penghayat]" type="text"
                class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_2_organisasi_penghayat')" />
        </div>
    </div>
</section>

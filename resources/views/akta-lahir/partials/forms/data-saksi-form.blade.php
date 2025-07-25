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
        <p class="text-lg font-bold text-gray-900">Data Saksi 1</p>
        <div>
            <x-input-label for="ds_1_nik" :value="__('Nomor Induk Kependudukan (NIK)') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="ds_1_nik" name="ds_1[nik]" type="text" class="mt-1 block w-full" :value="old('ds_1.nik')" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_1.nik')" />
        </div>

        <div>
            <x-input-label for="ds_1_nama_lengkap" :value="__('Nama Lengkap') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="ds_1_nama_lengkap" name="ds_1[nama_lengkap]" type="text" class="mt-1 block w-full"
                :value="old('ds_1.nama_lengkap')" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_1.nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="ds_1_tanggal_lahir" :value="__('Tanggal Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="ds_1_tanggal_lahir" name="ds_1[tanggal_lahir]" type="date" class="mt-1 block w-full"
                    :value="old('ds_1.tanggal_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1.tanggal_lahir')" />
            </div>

            <div>
                <x-input-label for="ds_1_umur" :value="__('Umur') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="ds_1_umur" name="ds_1[umur]" type="number" min="1" class="mt-1 block w-full"
                    :value="old('ds_1.umur')" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1.umur')" />
            </div>
        </div>

        <div>
            <x-select name="ds_1[pekerjaan]" :label="__('Pekerjaan') . ' <span class=\'text-red-600\'>*</span>'" :options="$pekerjaan" placeholder="Pilih Pekerjaan"
                :value="old('ds_1.pekerjaan')" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_1.pekerjaan')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="ds_1_kelurahan" :value="__('Desa/Kelurahan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="ds_1_kelurahan" name="ds_1[kelurahan]" type="text" class="mt-1 block w-full"
                    :value="old('ds_1.kelurahan')" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1.kelurahan')" />
            </div>

            <div>
                <x-input-label for="ds_1_kecamatan" :value="__('Kecamatan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="ds_1_kecamatan" name="ds_1[kecamatan]" type="text" class="mt-1 block w-full"
                    :value="old('ds_1.kecamatan')" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1.kecamatan')" />
            </div>

            <div>
                <x-input-label for="ds_1_kabupaten" :value="__('Kabupaten/Kota') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="ds_1_kabupaten" name="ds_1[kabupaten]" type="text" class="mt-1 block w-full"
                    :value="old('ds_1.kabupaten')" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1.kabupaten')" />
            </div>

            <div>
                <x-input-label for="ds_1_provinsi" :value="__('Provinsi') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="ds_1_provinsi" name="ds_1[provinsi]" type="text" class="mt-1 block w-full"
                    :value="old('ds_1.provinsi')" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_1.provinsi')" />
            </div>
        </div>

        <div>
            <x-input-label for="ds_1_alamat" :value="__('Alamat') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="ds_1_alamat" name="ds_1[alamat]" type="text" class="mt-1 block w-full"
                :value="old('ds_1.alamat')" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_1.alamat')" />
        </div>

    </div>

    <div class="mt-6 space-y-6">
        <p class="text-lg font-bold text-gray-900">Data Saksi 2</p>
        <div>
            <x-input-label for="ds_2_nik" :value="__('Nomor Induk Kependudukan (NIK)') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="ds_2_nik" name="ds_2[nik]" type="text" class="mt-1 block w-full" :value="old('ds_2.nik')" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_2.nik')" />
        </div>

        <div>
            <x-input-label for="ds_2_nama_lengkap" :value="__('Nama Lengkap') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="ds_2_nama_lengkap" name="ds_2[nama_lengkap]" type="text" class="mt-1 block w-full"
                :value="old('ds_2.nama_lengkap')" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_2.nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="ds_2_tanggal_lahir" :value="__('Tanggal Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="ds_2_tanggal_lahir" name="ds_2[tanggal_lahir]" type="date" class="mt-1 block w-full"
                    :value="old('ds_2.tanggal_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2.tanggal_lahir')" />
            </div>

            <div>
                <x-input-label for="ds_2_umur" :value="__('Umur') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="ds_2_umur" name="ds_2[umur]" type="number" min="1" class="mt-1 block w-full"
                    :value="old('ds_2.umur')" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2.umur')" />
            </div>
        </div>

        <div>
            <x-select name="ds_2[pekerjaan]" :label="__('Pekerjaan') . ' <span class=\'text-red-600\'>*</span>'" :options="$pekerjaan" placeholder="Pilih Pekerjaan"
                :value="old('ds_2.pekerjaan')" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_2.pekerjaan')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="ds_2_kelurahan" :value="__('Desa/Kelurahan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="ds_2_kelurahan" name="ds_2[kelurahan]" type="text" class="mt-1 block w-full"
                    :value="old('ds_2.kelurahan')" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2.kelurahan')" />
            </div>

            <div>
                <x-input-label for="ds_2_kecamatan" :value="__('Kecamatan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="ds_2_kecamatan" name="ds_2[kecamatan]" type="text" class="mt-1 block w-full"
                    :value="old('ds_2.kecamatan')" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2.kecamatan')" />
            </div>

            <div>
                <x-input-label for="ds_2_kabupaten" :value="__('Kabupaten/Kota') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="ds_2_kabupaten" name="ds_2[kabupaten]" type="text" class="mt-1 block w-full"
                    :value="old('ds_2.kabupaten')" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2.kabupaten')" />
            </div>

            <div>
                <x-input-label for="ds_2_provinsi" :value="__('Provinsi') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="ds_2_provinsi" name="ds_2[provinsi]" type="text" class="mt-1 block w-full"
                    :value="old('ds_2.provinsi')" />
                <x-input-error class="mt-2" :messages="$errors->get('ds_2.provinsi')" />
            </div>
        </div>

        <div>
            <x-input-label for="ds_2_alamat" :value="__('Alamat') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="ds_2_alamat" name="ds_2[alamat]" type="text" class="mt-1 block w-full"
                :value="old('ds_2.alamat')" />
            <x-input-error class="mt-2" :messages="$errors->get('ds_2.alamat')" />
        </div>
    </div>
</section>

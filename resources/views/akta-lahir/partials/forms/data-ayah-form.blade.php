<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Ayah') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="da_nik" :value="__('Nomor Induk Kependudukan (NIK)') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="da_nik" name="da_nik" type="text" class="mt-1 block w-full" :value="old('da_nik')" />
            <x-input-error class="mt-2" :messages="$errors->get('da_nik')" />
        </div>

        <div>
            <x-input-label for="da_nama_lengkap" :value="__('Nama Lengkap') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="da_nama_lengkap" name="da_nama_lengkap" type="text" class="mt-1 block w-full"
                :value="old('da_nama_lengkap')" />
            <x-input-error class="mt-2" :messages="$errors->get('da_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="da_tanggal_lahir" :value="__('Tanggal Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="da_tanggal_lahir" name="da_tanggal_lahir" type="date" class="mt-1 block w-full"
                    :value="old('da_tanggal_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('da_tanggal_lahir')" />
            </div>

            <div>
                <x-input-label for="da_umur" :value="__('Umur') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="da_umur" name="da_umur" type="number" min="1" class="mt-1 block w-full"
                    :value="old('da_umur')" />
                <x-input-error class="mt-2" :messages="$errors->get('da_umur')" />
            </div>
        </div>

        <div>
            <x-select name="da_pekerjaan" :label="__('Pekerjaan') . ' <span class=\'text-red-600\'>*</span>'" :options="$pekerjaan" placeholder="Pilih Pekerjaan"
                :value="old('da_pekerjaan')" />
            <x-input-error class="mt-2" :messages="$errors->get('da_pekerjaan')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="da_kelurahan" :value="__('Desa/Kelurahan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="da_kelurahan" name="da_kelurahan" type="text" class="mt-1 block w-full"
                    :value="old('da_kelurahan')" />
                <x-input-error class="mt-2" :messages="$errors->get('da_kelurahan')" />
            </div>

            <div>
                <x-input-label for="da_kecamatan" :value="__('Kecamatan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="da_kecamatan" name="da_kecamatan" type="text" class="mt-1 block w-full"
                    :value="old('da_kecamatan')" />
                <x-input-error class="mt-2" :messages="$errors->get('da_kecamatan')" />
            </div>

            <div>
                <x-input-label for="da_kabupaten" :value="__('Kabupaten/Kota') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="da_kabupaten" name="da_kabupaten" type="text" class="mt-1 block w-full"
                    :value="old('da_kabupaten')" />
                <x-input-error class="mt-2" :messages="$errors->get('da_kabupaten')" />
            </div>

            <div>
                <x-input-label for="da_provinsi" :value="__('Provinsi') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="da_provinsi" name="da_provinsi" type="text" class="mt-1 block w-full"
                    :value="old('da_provinsi')" />
                <x-input-error class="mt-2" :messages="$errors->get('da_provinsi')" />
            </div>
        </div>

        <div>
            <x-input-label for="da_alamat" :value="__('Alamat') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="da_alamat" name="da_alamat" type="text" class="mt-1 block w-full" :value="old('da_alamat')" />
            <x-input-error class="mt-2" :messages="$errors->get('da_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div>
                <x-select name="da_kewarganegaraan" :label="__('Kewarganegaraan') . ' <span class=\'text-red-600\'>*</span>'" :options="$kewarganegaraan"
                    placeholder="Pilih Status Kewarganegaraan" :selected="old('da_kewarganegaraan')" />
                <x-input-error class="mt-2" :messages="$errors->get('da_kewarganegaraan')" />
            </div>

            <div>
                <x-input-label for="da_kebangsaan" :value="__('Kebangsaan (bagi WNA)')" />
                <x-text-input id="da_kebangsaan" name="da_kebangsaan" type="text" class="mt-1 block w-full"
                    :value="old('da_kebangsaan')" />
                <x-input-error class="mt-2" :messages="$errors->get('da_kebangsaan')" />
            </div>
        </div>

    </div>
</section>

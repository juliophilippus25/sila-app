<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Pelapor') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="dp_nik" :value="__('Nomor Induk Kependudukan (NIK)') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="dp_nik" name="dp_nik" type="text" class="mt-1 block w-full" :value="old('dp_nik')" />
            <x-input-error class="mt-2" :messages="$errors->get('dp_nik')" />
        </div>

        <div>
            <x-input-label for="dp_nama_lengkap" :value="__('Nama Lengkap') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="dp_nama_lengkap" name="dp_nama_lengkap" type="text" class="mt-1 block w-full"
                :value="old('dp_nama_lengkap')" />
            <x-input-error class="mt-2" :messages="$errors->get('dp_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="dp_tanggal_lahir" :value="__('Tanggal Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dp_tanggal_lahir" name="dp_tanggal_lahir" type="date" class="mt-1 block w-full"
                    :value="old('dp_tanggal_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_tanggal_lahir')" />
            </div>

            <div>
                <x-input-label for="dp_umur" :value="__('Umur') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dp_umur" name="dp_umur" type="number" min="1" class="mt-1 block w-full"
                    :value="old('dp_umur')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_umur')" />
            </div>
        </div>

        <div>
            <x-select name="dp_pekerjaan" :label="__('Pekerjaan') . ' <span class=\'text-red-600\'>*</span>'" :options="$pekerjaan" placeholder="Pilih Pekerjaan"
                :value="old('dp_pekerjaan')" />
            <x-input-error class="mt-2" :messages="$errors->get('dp_pekerjaan')" />
        </div>

        <div>
            <x-input-label for="dp_alamat" :value="__('Alamat') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="dp_alamat" name="dp_alamat" type="text" class="mt-1 block w-full" :value="old('dp_alamat')" />
            <x-input-error class="mt-2" :messages="$errors->get('dp_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="dp_kelurahan" :value="__('Desa/Kelurahan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dp_kelurahan" name="dp_kelurahan" type="text" class="mt-1 block w-full"
                    :value="old('dp_kelurahan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_kelurahan')" />
            </div>

            <div>
                <x-input-label for="dp_kecamatan" :value="__('Kecamatan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dp_kecamatan" name="dp_kecamatan" type="text" class="mt-1 block w-full"
                    :value="old('dp_kecamatan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_kecamatan')" />
            </div>

            <div>
                <x-input-label for="dp_kabupaten" :value="__('Kabupaten/Kota') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dp_kabupaten" name="dp_kabupaten" type="text" class="mt-1 block w-full"
                    :value="old('dp_kabupaten')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_kabupaten')" />
            </div>

            <div>
                <x-input-label for="dp_provinsi" :value="__('Provinsi') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dp_provinsi" name="dp_provinsi" type="text" class="mt-1 block w-full"
                    :value="old('dp_provinsi')" />
                <x-input-error class="mt-2" :messages="$errors->get('dp_provinsi')" />
            </div>
        </div>
    </div>
</section>

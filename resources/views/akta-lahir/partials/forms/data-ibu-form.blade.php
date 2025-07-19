<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Ibu') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="di_nik" :value="__('Nomor Induk Kependudukan (NIK)') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="di_nik" name="di_nik" type="text" class="mt-1 block w-full" :value="old('di_nik')" />
            <x-input-error class="mt-2" :messages="$errors->get('di_nik')" />
        </div>

        <div>
            <x-input-label for="di_nama_lengkap" :value="__('Nama Lengkap') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="di_nama_lengkap" name="di_nama_lengkap" type="text" class="mt-1 block w-full"
                :value="old('di_nama_lengkap')" />
            <x-input-error class="mt-2" :messages="$errors->get('di_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="di_tanggal_lahir" :value="__('Tanggal Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_tanggal_lahir" name="di_tanggal_lahir" type="date" class="mt-1 block w-full"
                    :value="old('di_tanggal_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_tanggal_lahir')" />
            </div>

            <div>
                <x-input-label for="di_umur" :value="__('Umur') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_umur" name="di_umur" type="number" min="1" class="mt-1 block w-full"
                    :value="old('di_umur')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_umur')" />
            </div>
        </div>

        <div>
            <x-select name="di_pekerjaan" :label="__('Pekerjaan') . ' <span class=\'text-red-600\'>*</span>'" :options="$pekerjaan" placeholder="Pilih Pekerjaan"
                :value="old('di_pekerjaan')" />
            <x-input-error class="mt-2" :messages="$errors->get('di_pekerjaan')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="di_kelurahan" :value="__('Desa/Kelurahan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_kelurahan" name="di_kelurahan" type="text" class="mt-1 block w-full"
                    :value="old('di_kelurahan')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_kelurahan')" />
            </div>

            <div>
                <x-input-label for="di_kecamatan" :value="__('Kecamatan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_kecamatan" name="di_kecamatan" type="text" class="mt-1 block w-full"
                    :value="old('di_kecamatan')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_kecamatan')" />
            </div>

            <div>
                <x-input-label for="di_kabupaten" :value="__('Kabupaten/Kota') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_kabupaten" name="di_kabupaten" type="text" class="mt-1 block w-full"
                    :value="old('di_kabupaten')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_kabupaten')" />
            </div>

            <div>
                <x-input-label for="di_provinsi" :value="__('Provinsi') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_provinsi" name="di_provinsi" type="text" class="mt-1 block w-full"
                    :value="old('di_provinsi')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_provinsi')" />
            </div>
        </div>

        <div>
            <x-input-label for="di_alamat" :value="__('Alamat') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="di_alamat" name="di_alamat" type="text" class="mt-1 block w-full" :value="old('di_alamat')" />
            <x-input-error class="mt-2" :messages="$errors->get('di_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div>
                <x-select name="di_kewarganegaraan" :label="__('Kewarganegaraan') . ' <span class=\'text-red-600\'>*</span>'" :options="$kewarganegaraan"
                    placeholder="Pilih Status Kewarganegaraan" :selected="old('di_kewarganegaraan')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_kewarganegaraan')" />
            </div>

            <div>
                <x-input-label for="di_kebangsaan" :value="__('Kebangsaan (bagi WNA)')" />
                <x-text-input id="di_kebangsaan" name="di_kebangsaan" type="text" class="mt-1 block w-full"
                    :value="old('di_kebangsaan')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_kebangsaan')" />
            </div>

            <div>
                <x-input-label for="di_pencatatan_perkawinan" :value="__('Tanggal Pencatatan Perkawinan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_pencatatan_perkawinan" name="di_pencatatan_perkawinan" type="date"
                    class="mt-1 block w-full" :value="old('di_pencatatan_perkawinan')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_pencatatan_perkawinan')" />
            </div>
        </div>

    </div>
</section>

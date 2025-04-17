<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Ayah dari Istri') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="dadi_nik" :value="__('Nomor Induk Kependudukan (NIK)') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="dadi_nik" name="dadi_nik" type="number" class="mt-1 block w-full" :value="old('dadi_nik')" />
            <x-input-error class="mt-2" :messages="$errors->get('dadi_nik')" />
        </div>

        <div>
            <x-input-label for="dadi_nama_lengkap" :value="__('Nama Lengkap') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="dadi_nama_lengkap" name="dadi_nama_lengkap" type="text" class="mt-1 block w-full"
                :value="old('dadi_nama_lengkap')" />
            <x-input-error class="mt-2" :messages="$errors->get('dadi_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="dadi_tempat_lahir" :value="__('Tempat Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dadi_tempat_lahir" name="dadi_tempat_lahir" type="text" class="mt-1 block w-full"
                    :value="old('dadi_tempat_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('dadi_tempat_lahir')" />
            </div>

            <div>
                <x-input-label for="dadi_tanggal_lahir" :value="__('Tanggal Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dadi_tanggal_lahir" name="dadi_tanggal_lahir" type="date" class="mt-1 block w-full"
                    :value="old('dadi_tanggal_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('dadi_tanggal_lahir')" />
            </div>
        </div>

        <div>
            <x-input-label for="dadi_alamat" :value="__('Alamat') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="dadi_alamat" name="dadi_alamat" type="text" class="mt-1 block w-full"
                :value="old('dadi_alamat')" />
            <x-input-error class="mt-2" :messages="$errors->get('dadi_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="dadi_rt" :value="__('RT') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dadi_rt" name="dadi_rt" type="text" class="mt-1 block w-full"
                    :value="old('dadi_rt')" />
                <x-input-error class="mt-2" :messages="$errors->get('dadi_rt')" />
            </div>

            <div>
                <x-input-label for="dadi_rw" :value="__('RW') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dadi_rw" name="dadi_rw" type="text" class="mt-1 block w-full"
                    :value="old('dadi_rw')" />
                <x-input-error class="mt-2" :messages="$errors->get('dadi_rw')" />
            </div>

            <div>
                <x-input-label for="dadi_kode_pos" :value="__('Kode Pos') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dadi_kode_pos" name="dadi_kode_pos" type="text" class="mt-1 block w-full"
                    :value="old('dadi_kode_pos')" />
                <x-input-error class="mt-2" :messages="$errors->get('dadi_kode_pos')" />
            </div>

            <div>
                <x-input-label for="dadi_telepon" :value="__('Telepon') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dadi_telepon" name="dadi_telepon" type="text" class="mt-1 block w-full"
                    :value="old('dadi_telepon')" />
                <x-input-error class="mt-2" :messages="$errors->get('dadi_telepon')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="dadi_kelurahan" :value="__('Desa/Kelurahan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dadi_kelurahan" name="dadi_kelurahan" type="text" class="mt-1 block w-full"
                    :value="old('dadi_kelurahan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dadi_kelurahan')" />
            </div>

            <div>
                <x-input-label for="dadi_kecamatan" :value="__('Kecamatan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dadi_kecamatan" name="dadi_kecamatan" type="text" class="mt-1 block w-full"
                    :value="old('dadi_kecamatan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dadi_kecamatan')" />
            </div>

            <div>
                <x-input-label for="dadi_kabupaten" :value="__('Kabupaten/Kota') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dadi_kabupaten" name="dadi_kabupaten" type="text" class="mt-1 block w-full"
                    :value="old('dadi_kabupaten')" />
                <x-input-error class="mt-2" :messages="$errors->get('dadi_kabupaten')" />
            </div>

            <div>
                <x-input-label for="dadi_provinsi" :value="__('Provinsi') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dadi_provinsi" name="dadi_provinsi" type="text" class="mt-1 block w-full"
                    :value="old('dadi_provinsi')" />
                <x-input-error class="mt-2" :messages="$errors->get('dadi_provinsi')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="dadi_pekerjaan" :label="__('Pekerjaan') . ' <span class=\'text-red-600\'>*</span>'" :options="$pekerjaan" placeholder="Pilih Pekerjaan"
                    :value="old('dadi_pekerjaan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dadi_pekerjaan')" />
            </div>

            <div>
                <x-select name="dadi_agama" :label="__('Agama') . ' <span class=\'text-red-600\'>*</span>'" :options="$agama" placeholder="Pilih Agama"
                    :value="old('dadi_agama')" />
                <x-input-error class="mt-2" :messages="$errors->get('dadi_agama')" />
            </div>
        </div>

        <div>
            <x-input-label for="dadi_organisasi_penghayat" :value="__('Nama Organisasi Penghayat Kepercayaan')" />
            <x-text-input id="dadi_organisasi_penghayat" name="dadi_organisasi_penghayat" type="text"
                class="mt-1 block w-full" :value="old('dadi_organisasi_penghayat')" />
            <x-input-error class="mt-2" :messages="$errors->get('dadi_organisasi_penghayat')" />
        </div>
    </div>
</section>

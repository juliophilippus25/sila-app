<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Ibu dari Suami') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="dids_nik" :value="__('Nomor Induk Kependudukan (NIK)') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="dids_nik" name="dids_nik" type="number" class="mt-1 block w-full" :value="old('dids_nik')" />
            <x-input-error class="mt-2" :messages="$errors->get('dids_nik')" />
        </div>

        <div>
            <x-input-label for="dids_nama_lengkap" :value="__('Nama Lengkap') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="dids_nama_lengkap" name="dids_nama_lengkap" type="text" class="mt-1 block w-full"
                :value="old('dids_nama_lengkap')" />
            <x-input-error class="mt-2" :messages="$errors->get('dids_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="dids_tempat_lahir" :value="__('Tempat Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dids_tempat_lahir" name="dids_tempat_lahir" type="text" class="mt-1 block w-full"
                    :value="old('dids_tempat_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('dids_tempat_lahir')" />
            </div>

            <div>
                <x-input-label for="dids_tanggal_lahir" :value="__('Tanggal Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dids_tanggal_lahir" name="dids_tanggal_lahir" type="date" class="mt-1 block w-full"
                    :value="old('dids_tanggal_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('dids_tanggal_lahir')" />
            </div>
        </div>

        <div>
            <x-input-label for="dids_alamat" :value="__('Alamat') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="dids_alamat" name="dids_alamat" type="text" class="mt-1 block w-full"
                :value="old('dids_alamat')" />
            <x-input-error class="mt-2" :messages="$errors->get('dids_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="dids_rt" :value="__('RT') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dids_rt" name="dids_rt" type="text" class="mt-1 block w-full"
                    :value="old('dids_rt')" />
                <x-input-error class="mt-2" :messages="$errors->get('dids_rt')" />
            </div>

            <div>
                <x-input-label for="dids_rw" :value="__('RW') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dids_rw" name="dids_rw" type="text" class="mt-1 block w-full"
                    :value="old('dids_rw')" />
                <x-input-error class="mt-2" :messages="$errors->get('dids_rw')" />
            </div>

            <div>
                <x-input-label for="dids_kode_pos" :value="__('Kode Pos') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dids_kode_pos" name="dids_kode_pos" type="text" class="mt-1 block w-full"
                    :value="old('dids_kode_pos')" />
                <x-input-error class="mt-2" :messages="$errors->get('dids_kode_pos')" />
            </div>

            <div>
                <x-input-label for="dids_telepon" :value="__('Telepon') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dids_telepon" name="dids_telepon" type="number" class="mt-1 block w-full"
                    :value="old('dids_telepon')" />
                <x-input-error class="mt-2" :messages="$errors->get('dids_telepon')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="dids_kelurahan" :value="__('Desa/Kelurahan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dids_kelurahan" name="dids_kelurahan" type="text" class="mt-1 block w-full"
                    :value="old('dids_kelurahan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dids_kelurahan')" />
            </div>

            <div>
                <x-input-label for="dids_kecamatan" :value="__('Kecamatan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dids_kecamatan" name="dids_kecamatan" type="text" class="mt-1 block w-full"
                    :value="old('dids_kecamatan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dids_kecamatan')" />
            </div>

            <div>
                <x-input-label for="dids_kabupaten" :value="__('Kabupaten/Kota') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dids_kabupaten" name="dids_kabupaten" type="text" class="mt-1 block w-full"
                    :value="old('dids_kabupaten')" />
                <x-input-error class="mt-2" :messages="$errors->get('dids_kabupaten')" />
            </div>

            <div>
                <x-input-label for="dids_provinsi" :value="__('Provinsi') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dids_provinsi" name="dids_provinsi" type="text" class="mt-1 block w-full"
                    :value="old('dids_provinsi')" />
                <x-input-error class="mt-2" :messages="$errors->get('dids_provinsi')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="dids_pekerjaan" :label="__('Pekerjaan') . ' <span class=\'text-red-600\'>*</span>'" :options="$pekerjaan" placeholder="Pilih Pekerjaan"
                    :selected="old('dids_pekerjaan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dids_pekerjaan')" />
            </div>

            <div>
                <x-select name="dids_agama" :label="__('Agama') . ' <span class=\'text-red-600\'>*</span>'" :options="$agama" placeholder="Pilih Agama"
                    :selected="old('dids_agama')" />
                <x-input-error class="mt-2" :messages="$errors->get('dids_agama')" />
            </div>
        </div>

        <div>
            <x-input-label for="dids_organisasi_penghayat" :value="__('Nama Organisasi Penghayat Kepercayaan')" />
            <x-text-input id="dids_organisasi_penghayat" name="dids_organisasi_penghayat" type="text"
                class="mt-1 block w-full" :value="old('dids_organisasi_penghayat')" />
            <x-input-error class="mt-2" :messages="$errors->get('dids_organisasi_penghayat')" />
        </div>
    </div>
</section>

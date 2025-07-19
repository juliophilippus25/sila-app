<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Ayah dari Suami') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="dads_nik" :value="__('Nomor Induk Kependudukan (NIK)') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="dads_nik" name="dads_nik" type="text" class="mt-1 block w-full" :value="old('dads_nik')" />
            <x-input-error class="mt-2" :messages="$errors->get('dads_nik')" />
        </div>

        <div>
            <x-input-label for="dads_nama_lengkap" :value="__('Nama Lengkap') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="dads_nama_lengkap" name="dads_nama_lengkap" type="text" class="mt-1 block w-full"
                :value="old('dads_nama_lengkap')" />
            <x-input-error class="mt-2" :messages="$errors->get('dads_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="dads_tempat_lahir" :value="__('Tempat Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dads_tempat_lahir" name="dads_tempat_lahir" type="text" class="mt-1 block w-full"
                    :value="old('dads_tempat_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_tempat_lahir')" />
            </div>

            <div>
                <x-input-label for="dads_tanggal_lahir" :value="__('Tanggal Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dads_tanggal_lahir" name="dads_tanggal_lahir" type="date" class="mt-1 block w-full"
                    :value="old('dads_tanggal_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_tanggal_lahir')" />
            </div>
        </div>

        <div>
            <x-input-label for="dads_alamat" :value="__('Alamat') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="dads_alamat" name="dads_alamat" type="text" class="mt-1 block w-full"
                :value="old('dads_alamat')" />
            <x-input-error class="mt-2" :messages="$errors->get('dads_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="dads_rt" :value="__('RT') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dads_rt" name="dads_rt" type="text" class="mt-1 block w-full"
                    :value="old('dads_rt')" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_rt')" />
            </div>

            <div>
                <x-input-label for="dads_rw" :value="__('RW') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dads_rw" name="dads_rw" type="text" class="mt-1 block w-full"
                    :value="old('dads_rw')" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_rw')" />
            </div>

            <div>
                <x-input-label for="dads_kode_pos" :value="__('Kode Pos') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dads_kode_pos" name="dads_kode_pos" type="text" class="mt-1 block w-full"
                    :value="old('dads_kode_pos')" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_kode_pos')" />
            </div>

            <div>
                <x-input-label for="dads_telepon" :value="__('Telepon') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dads_telepon" name="dads_telepon" type="text" class="mt-1 block w-full"
                    :value="old('dads_telepon')" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_telepon')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="dads_kelurahan" :value="__('Desa/Kelurahan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dads_kelurahan" name="dads_kelurahan" type="text" class="mt-1 block w-full"
                    :value="old('dads_kelurahan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_kelurahan')" />
            </div>

            <div>
                <x-input-label for="dads_kecamatan" :value="__('Kecamatan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dads_kecamatan" name="dads_kecamatan" type="text" class="mt-1 block w-full"
                    :value="old('dads_kecamatan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_kecamatan')" />
            </div>

            <div>
                <x-input-label for="dads_kabupaten" :value="__('Kabupaten/Kota') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dads_kabupaten" name="dads_kabupaten" type="text" class="mt-1 block w-full"
                    :value="old('dads_kabupaten')" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_kabupaten')" />
            </div>

            <div>
                <x-input-label for="dads_provinsi" :value="__('Provinsi') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dads_provinsi" name="dads_provinsi" type="text" class="mt-1 block w-full"
                    :value="old('dads_provinsi')" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_provinsi')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="dads_pekerjaan" :label="__('Pekerjaan') . ' <span class=\'text-red-600\'>*</span>'" :options="$pekerjaan" placeholder="Pilih Pekerjaan"
                    :value="old('dads_pekerjaan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_pekerjaan')" />
            </div>

            <div>
                <x-select name="dads_agama" :label="__('Agama') . ' <span class=\'text-red-600\'>*</span>'" :options="$agama" placeholder="Pilih Agama"
                    :value="old('dads_agama')" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_agama')" />
            </div>
        </div>

        <div>
            <x-input-label for="dads_organisasi_penghayat" :value="__('Nama Organisasi Penghayat Kepercayaan')" />
            <x-text-input id="dads_organisasi_penghayat" name="dads_organisasi_penghayat" type="text"
                class="mt-1 block w-full" :value="old('dads_organisasi_penghayat')" />
            <x-input-error class="mt-2" :messages="$errors->get('dads_organisasi_penghayat')" />
        </div>
    </div>
</section>

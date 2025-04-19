<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Ibu dari Istri') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="didi_nik" :value="__('Nomor Induk Kependudukan (NIK)') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="didi_nik" name="didi_nik" type="text" class="mt-1 block w-full" :value="old('didi_nik')" />
            <x-input-error class="mt-2" :messages="$errors->get('didi_nik')" />
        </div>

        <div>
            <x-input-label for="didi_nama_lengkap" :value="__('Nama Lengkap') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="didi_nama_lengkap" name="didi_nama_lengkap" type="text" class="mt-1 block w-full"
                :value="old('didi_nama_lengkap')" />
            <x-input-error class="mt-2" :messages="$errors->get('didi_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="didi_tempat_lahir" :value="__('Tempat Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="didi_tempat_lahir" name="didi_tempat_lahir" type="text" class="mt-1 block w-full"
                    :value="old('didi_tempat_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('didi_tempat_lahir')" />
            </div>

            <div>
                <x-input-label for="didi_tanggal_lahir" :value="__('Tanggal Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="didi_tanggal_lahir" name="didi_tanggal_lahir" type="date" class="mt-1 block w-full"
                    :value="old('didi_tanggal_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('didi_tanggal_lahir')" />
            </div>
        </div>

        <div>
            <x-input-label for="didi_alamat" :value="__('Alamat') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="didi_alamat" name="didi_alamat" type="text" class="mt-1 block w-full"
                :value="old('didi_alamat')" />
            <x-input-error class="mt-2" :messages="$errors->get('didi_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="didi_rt" :value="__('RT') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="didi_rt" name="didi_rt" type="text" class="mt-1 block w-full"
                    :value="old('didi_rt')" />
                <x-input-error class="mt-2" :messages="$errors->get('didi_rt')" />
            </div>

            <div>
                <x-input-label for="didi_rw" :value="__('RW') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="didi_rw" name="didi_rw" type="text" class="mt-1 block w-full"
                    :value="old('didi_rw')" />
                <x-input-error class="mt-2" :messages="$errors->get('didi_rw')" />
            </div>

            <div>
                <x-input-label for="didi_kode_pos" :value="__('Kode Pos') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="didi_kode_pos" name="didi_kode_pos" type="text" class="mt-1 block w-full"
                    :value="old('didi_kode_pos')" />
                <x-input-error class="mt-2" :messages="$errors->get('didi_kode_pos')" />
            </div>

            <div>
                <x-input-label for="didi_telepon" :value="__('Telepon') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="didi_telepon" name="didi_telepon" type="text" class="mt-1 block w-full"
                    :value="old('didi_telepon')" />
                <x-input-error class="mt-2" :messages="$errors->get('didi_telepon')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="didi_kelurahan" :value="__('Desa/Kelurahan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="didi_kelurahan" name="didi_kelurahan" type="text" class="mt-1 block w-full"
                    :value="old('didi_kelurahan')" />
                <x-input-error class="mt-2" :messages="$errors->get('didi_kelurahan')" />
            </div>

            <div>
                <x-input-label for="didi_kecamatan" :value="__('Kecamatan') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="didi_kecamatan" name="didi_kecamatan" type="text" class="mt-1 block w-full"
                    :value="old('didi_kecamatan')" />
                <x-input-error class="mt-2" :messages="$errors->get('didi_kecamatan')" />
            </div>

            <div>
                <x-input-label for="didi_kabupaten" :value="__('Kabupaten/Kota') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="didi_kabupaten" name="didi_kabupaten" type="text" class="mt-1 block w-full"
                    :value="old('didi_kabupaten')" />
                <x-input-error class="mt-2" :messages="$errors->get('didi_kabupaten')" />
            </div>

            <div>
                <x-input-label for="didi_provinsi" :value="__('Provinsi') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="didi_provinsi" name="didi_provinsi" type="text" class="mt-1 block w-full"
                    :value="old('didi_provinsi')" />
                <x-input-error class="mt-2" :messages="$errors->get('didi_provinsi')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="didi_pekerjaan" :label="__('Pekerjaan') . ' <span class=\'text-red-600\'>*</span>'" :options="$pekerjaan" placeholder="Pilih Pekerjaan"
                    :selected="old('didi_pekerjaan')" />
                <x-input-error class="mt-2" :messages="$errors->get('didi_pekerjaan')" />
            </div>

            <div>
                <x-select name="didi_agama" :label="__('Agama') . ' <span class=\'text-red-600\'>*</span>'" :options="$agama" placeholder="Pilih Agama"
                    :selected="old('didi_agama')" />
                <x-input-error class="mt-2" :messages="$errors->get('didi_agama')" />
            </div>
        </div>

        <div>
            <x-input-label for="didi_organisasi_penghayat" :value="__('Nama Organisasi Penghayat Kepercayaan')" />
            <x-text-input id="didi_organisasi_penghayat" name="didi_organisasi_penghayat" type="text"
                class="mt-1 block w-full" :value="old('didi_organisasi_penghayat')" />
            <x-input-error class="mt-2" :messages="$errors->get('didi_organisasi_penghayat')" />
        </div>
    </div>
</section>

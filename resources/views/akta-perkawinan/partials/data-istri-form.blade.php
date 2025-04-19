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
            <x-input-label for="di_nik" :value="__('Nomor Induk Kependudukan (NIK)') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="di_nik" name="di_nik" type="text" class="mt-1 block w-full" :value="old('di_nik')" />
            <x-input-error class="mt-2" :messages="$errors->get('di_nik')" />
        </div>

        <div>
            <x-input-label for="di_nomor_kk" :value="__('Nomor Kartu Keluarga (Nomor KK)') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="di_nomor_kk" name="di_nomor_kk" type="text" class="mt-1 block w-full"
                :value="old('di_nomor_kk')" />
            <x-input-error class="mt-2" :messages="$errors->get('di_nomor_kk')" />
        </div>

        <div>
            <x-input-label for="di_no_paspor" :value="__('Nomor Paspor')" />
            <x-text-input id="di_no_paspor" name="di_no_paspor" type="text" class="mt-1 block w-full"
                :value="old('di_no_paspor')" />
            <x-input-error class="mt-2" :messages="$errors->get('di_nomor_paspor')" />
        </div>

        <div>
            <x-input-label for="di_nama_lengkap" :value="__('Nama Lengkap') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="di_nama_lengkap" name="di_nama_lengkap" type="text" class="mt-1 block w-full"
                :value="old('di_nama_lengkap')" />
            <x-input-error class="mt-2" :messages="$errors->get('di_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="di_tempat_lahir" :value="__('Tempat Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_tempat_lahir" name="di_tempat_lahir" type="text" class="mt-1 block w-full"
                    :value="old('di_tempat_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_tempat_lahir')" />
            </div>

            <div>
                <x-input-label for="di_tanggal_lahir" :value="__('Tanggal Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_tanggal_lahir" name="di_tanggal_lahir" type="date" class="mt-1 block w-full"
                    :value="old('di_tanggal_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_tanggal_lahir')" />
            </div>
        </div>

        <div>
            <x-input-label for="di_alamat" :value="__('Alamat') . ' <span class=\'text-red-600\'>*</span>'" />
            <x-text-input id="di_alamat" name="di_alamat" type="text" class="mt-1 block w-full" :value="old('di_alamat')" />
            <x-input-error class="mt-2" :messages="$errors->get('di_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="di_rt" :value="__('RT') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_rt" name="di_rt" type="text" class="mt-1 block w-full"
                    :value="old('di_rt')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_rt')" />
            </div>

            <div>
                <x-input-label for="di_rw" :value="__('RW') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_rw" name="di_rw" type="text" class="mt-1 block w-full"
                    :value="old('di_rw')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_rw')" />
            </div>

            <div>
                <x-input-label for="di_kode_pos" :value="__('Kode Pos') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_kode_pos" name="di_kode_pos" type="text" class="mt-1 block w-full"
                    :value="old('di_kode_pos')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_kode_pos')" />
            </div>

            <div>
                <x-input-label for="di_telepon" :value="__('Telepon') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_telepon" name="di_telepon" type="text" class="mt-1 block w-full"
                    :value="old('di_telepon')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_telepon')" />
            </div>
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

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="di_pendidikan_terakhir" :label="__('Pendidikan Terakhir') . ' <span class=\'text-red-600\'>*</span>'" :options="$pendidikanTerakhir"
                    placeholder="Pilih Pendidikan Terakhir" :selected="old('di_pendidikan_terakhir')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_pendidikan_terakhir')" />
            </div>

            <div>
                <x-select name="di_agama" :label="__('Agama') . ' <span class=\'text-red-600\'>*</span>'" :options="$agama" placeholder="Pilih Agama"
                    :selected="old('di_agama')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_agama')" />
            </div>
        </div>

        <div>
            <x-input-label for="di_organisasi_penghayat" :value="__('Nama Organisasi Penghayat Kepercayaan')" />
            <x-text-input id="di_organisasi_penghayat" name="di_organisasi_penghayat" type="text"
                class="mt-1 block w-full" :value="old('di_organisasi_penghayat')" />
            <x-input-error class="mt-2" :messages="$errors->get('di_organisasi_penghayat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="di_pekerjaan" :label="__('Pekerjaan') . ' <span class=\'text-red-600\'>*</span>'" :options="$pekerjaan" placeholder="Pilih Pekerjaan"
                    :selected="old('di_pekerjaan')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_pekerjaan')" />
            </div>

            <div>
                <x-input-label for="di_anak_ke" :value="__('Anak Ke')" />
                <x-text-input id="di_anak_ke" name="di_anak_ke" type="number" min="1" step="1"
                    class="mt-1 block w-full" :value="old('di_anak_ke')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_anak_ke')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="di_status_perkawinan" :label="__('Status Perkawinan Sebelum Nikah') . ' <span class=\'text-red-600\'>*</span>'" :options="$statusPerkawinan"
                    placeholder="Pilih Status Perkawinan" :selected="old('di_status_perkawinan')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_status_perkawinan')" />
            </div>

            <div>
                <x-input-label for="di_perkawinan_ke" :value="__('Perkawinan Yang Ke') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="di_perkawinan_ke" name="di_perkawinan_ke" type="number" min="1"
                    step="1" class="mt-1 block w-full" :value="old('di_perkawinan_ke')" />
                <x-input-error class="mt-2" :messages="$errors->get('di_perkawinan_ke')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
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
        </div>

    </div>
</section>

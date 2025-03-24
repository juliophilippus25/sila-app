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
            <x-input-label for="dads_nik" :value="__('Nomor Induk Kependudukan (NIK)')" />
            <x-text-input id="dads_nik" name="dads_nik" type="text" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('dads_nik')" />
        </div>

        <div>
            <x-input-label for="dads_nama_lengkap" :value="__('Nama Lengkap')" />
            <x-text-input id="dads_nama_lengkap" name="dads_nama_lengkap" type="text" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('dads_nama_lengkap')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="dads_tempat_lahir" :value="__('Tempat Lahir')" />
                <x-text-input id="dads_tempat_lahir" name="dads_tempat_lahir" type="text"
                    class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_tempat_lahir')" />
            </div>

            <div>
                <x-input-label for="dads_tanggal_lahir" :value="__('Tanggal Lahir')" />
                <x-text-input id="dads_tanggal_lahir" name="dads_tanggal_lahir" type="date"
                    class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_tanggal_lahir')" />
            </div>
        </div>

        <div>
            <x-input-label for="dads_alamat" :value="__('Alamat')" />
            <x-text-input id="dads_alamat" name="dads_alamat" type="text" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('dads_alamat')" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="dads_rt" :value="__('RT')" />
                <x-text-input id="dads_rt" name="dads_rt" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_rt')" />
            </div>

            <div>
                <x-input-label for="dads_rw" :value="__('RW')" />
                <x-text-input id="dads_rw" name="dads_rw" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_rw')" />
            </div>

            <div>
                <x-input-label for="dads_kode_pos" :value="__('Kode Pos')" />
                <x-text-input id="dads_kode_pos" name="dads_kode_pos" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_kode_pos')" />
            </div>

            <div>
                <x-input-label for="dads_telepon" :value="__('Telepon')" />
                <x-text-input id="dads_telepon" name="dads_telepon" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_telepon')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-input-label for="dads_kelurahan" :value="__('Desa/Kelurahan')" />
                <x-text-input id="dads_kelurahan" name="dads_kelurahan" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_kelurahan')" />
            </div>

            <div>
                <x-input-label for="dads_kecamatan" :value="__('Kecamatan')" />
                <x-text-input id="dads_kecamatan" name="dads_kecamatan" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_kecamatan')" />
            </div>

            <div>
                <x-input-label for="dads_kabupaten" :value="__('Kabupaten/Kota')" />
                <x-text-input id="dads_kabupaten" name="dads_kabupaten" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_kabupaten')" />
            </div>

            <div>
                <x-input-label for="dads_provinsi" :value="__('Provinsi')" />
                <x-text-input id="dads_provinsi" name="dads_provinsi" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_provinsi')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="dads_pekerjaan" label="Pekerjaan" :options="$pekerjaan" placeholder="Pilih Pekerjaan" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_pekerjaan')" />
            </div>

            <div>
                <x-select name="dads_agama" label="Agama" :options="$agama" placeholder="Pilih Agama" />
                <x-input-error class="mt-2" :messages="$errors->get('dads_agama')" />
            </div>
        </div>

        <div>
            <x-input-label for="dads_organisasi_penghayat" :value="__('Nama Organisasi Penghayat Kepercayaan')" />
            <x-text-input id="dads_organisasi_penghayat" name="dads_organisasi_penghayat" type="text"
                class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('dads_organisasi_penghayat')" />
        </div>
    </div>
</section>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Data Bayi/Anak') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>

    <div class="mt-6 space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="dba_nama_lengkap" :value="__('Nama Lengkap') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dba_nama_lengkap" name="dba_nama_lengkap" type="text" class="mt-1 block w-full"
                    :value="old('dba_nama_lengkap')" />
                <x-input-error class="mt-2" :messages="$errors->get('dba_nama_lengkap')" />
            </div>

            <div>
                <x-input-label for="dba_jk" :value="__('Jenis Kelamin') . ' <span class=\'text-red-600\'>*</span>'" />

                <div class="flex gap-2">
                    <x-radio-button name="dba_jk" value="Laki-laki" label="Laki-laki" :checked="old('jk') === 'Laki-laki'" />
                    <x-radio-button name="dba_jk" value="Perempuan" label="Perempuan" :checked="old('jk') === 'Perempuan'" />
                </div>

                <x-input-error class="mt-2" :messages="$errors->get('dba_jk')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-select name="dba_tempat_dilahirkan" :label="__('Tempat Dilahirkan') . ' <span class=\'text-red-600\'>*</span>'" :options="$tempatLahir"
                    placeholder="Pilih Tempat Dilahirkan" :value="old('dba_tempat_dilahirkan')" />
                <x-input-error class="mt-2" :messages="$errors->get('dba_tempat_dilahirkan')" />
            </div>

            <div>
                <x-input-label for="dba_tempat_kelahiran" :value="__('Tempat Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dba_tempat_kelahiran" name="dba_tempat_kelahiran" type="text"
                    class="mt-1 block w-full" :value="old('dba_tempat_kelahiran')" />
                <x-input-error class="mt-2" :messages="$errors->get('dba_tempat_kelahiran')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <x-input-label for="dba_tanggal_lahir" :value="__('Tanggal Lahir') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dba_tanggal_lahir" name="dba_tanggal_lahir" type="date" class="mt-1 block w-full"
                    :value="old('dba_tanggal_lahir')" />
                <x-input-error class="mt-2" :messages="$errors->get('dba_tanggal_lahir')" />
            </div>

            <div>
                <x-input-label for="dba_pukul" :value="__('Pukul') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dba_pukul" name="dba_pukul" type="time" class="mt-1 block w-full"
                    :value="old('dba_pukul')" />
                <x-input-error class="mt-2" :messages="$errors->get('dba_pukul')" />
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div>
                <x-select name="dba_jenis_kelahiran" :label="__('Jenis Kelahiran') . ' <span class=\'text-red-600\'>*</span>'" :options="$tempatLahir"
                    placeholder="Pilih Jenis Kelahiran" :value="old('dba_jenis_kelahiran')" />
                <x-input-error class="mt-2" :messages="$errors->get('dba_jenis_kelahiran')" />
            </div>

            <div>
                <x-input-label for="dba_kelahiran_ke" :value="__('Kelahiran Ke') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dba_kelahiran_ke" name="dba_kelahiran_ke" type="number" min="1"
                    class="mt-1 block w-full" :value="old('dba_kelahiran_ke')" />
                <x-input-error class="mt-2" :messages="$errors->get('dba_kelahiran_ke')" />
            </div>

            <div>
                <x-input-label for="dba_berat_bayi" :value="__('Berat Bayi (kg)') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dba_berat_bayi" name="dba_berat_bayi" type="number" class="mt-1 block w-full"
                    :value="old('dba_berat_bayi')" />
                <x-input-error class="mt-2" :messages="$errors->get('dba_berat_bayi')" />
            </div>

            <div>
                <x-input-label for="dba_panjang_bayi" :value="__('Panjang Bayi (cm)') . ' <span class=\'text-red-600\'>*</span>'" />
                <x-text-input id="dba_panjang_bayi" name="dba_panjang_bayi" type="number" class="mt-1 block w-full"
                    :value="old('dba_panjang_bayi')" />
                <x-input-error class="mt-2" :messages="$errors->get('dba_panjang_bayi')" />
            </div>
        </div>
    </div>
</section>

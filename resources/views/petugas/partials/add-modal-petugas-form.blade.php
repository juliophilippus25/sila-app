<x-primary-button type="button" x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'add-petugas')">{{ __('Tambah Petugas') }}
</x-primary-button>

<x-modal name="add-petugas" focusable :show="$errors->any()">
    <form method="post" action="{{ route('petugas.store') }}" class="p-6">
        @csrf

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Tambah Petugas') }}
        </h2>

        <div class="mt-4">
            <x-input-label for="name">
                {!! __('Nama') . ' <span class="text-red-600">*</span>' !!}
            </x-input-label>

            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                placeholder="{{ __('Nama') }}" value="{{ old('name') }}" required/>

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email">
                {!! __('Email') . ' <span class="text-red-600">*</span>' !!}
            </x-input-label>

            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                placeholder="{{ __('Email') }}" value="{{ old('email') }}" required />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="nip">
                {!! __('NIP') . ' <span class="text-red-600">*</span>' !!}
            </x-input-label>

            <x-text-input id="nip" name="nip" type="text" class="mt-1 block w-full"
                placeholder="{{ __('NIP') }}" value="{{ old('nip') }}" required />

            <x-input-error :messages="$errors->get('nip')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password">
                {!! __('Password') . ' <span class="text-red-600">*</span>' !!}
            </x-input-label>

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" placeholder="{{ __('Password') }}" required />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation">
                {!! __('Confirm Password') . ' <span class="text-red-600">*</span>' !!}
            </x-input-label>

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password"
                placeholder="{{ __('Confirm Password') }}" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Batal') }}
            </x-secondary-button>

            <x-primary-button class="ms-3">
                {{ __('Simpan') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>

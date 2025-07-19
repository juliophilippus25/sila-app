<x-primary-button type="button" x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'verification-perkawinan')">{{ __('Verifikasi') }}
</x-primary-button>

<x-modal name="verification-perkawinan" focusable>
    <div class="p-6">
        <h2 class="text-lg font-bold text-gray-900">
            {{ __('Verifikasi') }}
        </h2>

        <p>Apakah Anda yakin ingin memverifikasi akta perkawinan ini?</p>

        <div class="mt-4 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Tutup') }}
            </x-secondary-button>

            <x-danger-button class="ms-3" x-on:click.prevent="$dispatch('open-modal', 'alasan-penolakan')">
                {{ __('Tolak') }}
            </x-danger-button>

            <form action="{{ route('akta-perkawinan.accept', $aktaPerkawinan->id) }}" method="post" id="submit-form">
                @csrf
                <x-primary-button class="ms-3">
                    {{ __('Verifikasi') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-modal>

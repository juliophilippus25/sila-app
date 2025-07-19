<x-modal name="alasan-penolakan" focusable>
    <div class="p-6">
        <h2 class="text-lg font-bold text-gray-900">
            {{ __('Alasan Penolakan') }}
        </h2>

        <form action="{{ route('akta-lahir.reject', $aktaLahir->id) }}" method="POST">
            @csrf
            <div class="mt-4">
                <label for="alasan" class="block text-sm font-medium text-gray-700">Alasan</label>
                <textarea name="alasan" id="alasan" rows="4" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
            </div>

            <div class="mt-4 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Batal') }}
                </x-secondary-button>

                <x-danger-button class="ms-3" type="submit">
                    {{ __('Kirim Penolakan') }}
                </x-danger-button>
            </div>
        </form>
    </div>
</x-modal>

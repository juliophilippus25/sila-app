@section('title', 'Dashboard')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sistem Informasi Layanan Akta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 text-gray-900 font-semibold">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <!-- Teks Semboyan -->
                <div class="text-4xl mt-1 italic leading-relaxed px-6 pt-6">
                    {{ __("Adil Ka' Talino, Bacuramin Ka' Saruga, Basengat Ka' Jubata") }}
                </div>

                <!-- Gambar Gedung -->
                <div class="p-6">
                    <img src="{{ asset('images/Dukcapil.jpg') }}" class="w-full rounded-lg shadow-md">
                </div>

                <!-- Teks Instansi -->
                <div>
                    <p class="text-4xl mt-1 font-bold px-6 pt-2">
                        {{ __("Dinas Kependudukan dan Pencatatan Sipil Kabupaten Bengkayang") }}
                    </p>
                    <p class="mt-1 italic px-6 pt-1">
                        {{ __("Jalan Guna Baru, Trans Rangkang Kode Pos 79211") }}
                    </p>
                </div>

            </div>
        </div>
    </div>


    
</x-app-layout>

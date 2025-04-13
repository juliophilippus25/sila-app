@section('title', 'Detail Akta Perkawinan')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Akta Perkawinan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                {{-- Tabs --}}
                <div x-data="{ tab: 'akta' }">
                    <div class="border-b border-gray-200 mb-4">
                        <nav class="-mb-px flex space-x-8">
                            <button @click="tab = 'akta'"
                                :class="tab === 'akta' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Akta Perkawinan
                            </button>
                            <button @click="tab = 'suami'"
                                :class="tab === 'suami' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Suami
                            </button>
                            <button @click="tab = 'ayah_suami'"
                                :class="tab === 'ayah_suami' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Ayah Dari Suami
                            </button>
                            <button @click="tab = 'ibu_suami'"
                                :class="tab === 'ibu_suami' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Ibu Dari Suami
                            </button>
                        </nav>
                    </div>

                    <div>
                        <div x-show="tab === 'akta'">
                            @include('akta-perkawinan.tabs.akta-perkawinan')
                        </div>
                        <div x-show="tab === 'suami'">
                            @include('akta-perkawinan.tabs.data-suami')
                        </div>
                        <div x-show="tab === 'ayah_suami'">
                            @include('akta-perkawinan.tabs.data-ayah-suami')
                        </div>
                        <div x-show="tab === 'ibu_suami'">
                            {{-- Konten Data Ibu Dari Suami --}}
                            <p class="text-gray-700">Isi detail Data Ibu Dari Suami di sini.</p>
                        </div>
                    </div>
                </div>
                {{-- End Tabs --}}
            </div>
        </div>
    </div>
</x-app-layout>

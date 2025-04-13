@section('title', 'Detail Akta Perkawinan')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Akta Perkawinan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="flex justify-end mb-4">
                @include('akta-perkawinan.partials.verification-modal')
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                {{-- Tabs --}}
                <div x-data="{ tab: 'akta' }">
                    <div class="border-b border-gray-200 mb-4">
                        <nav class="-mb-px flex space-x-8 overflow-x-scroll no-scrollbar">
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
                            <button @click="tab = 'istri'"
                                :class="tab === 'istri' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Istri
                            </button>
                            <button @click="tab = 'ayah_istri'"
                                :class="tab === 'ayah_istri' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Ayah Istri
                            </button>
                            <button @click="tab = 'ibu_istri'"
                                :class="tab === 'ibu_istri' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Ibu Istri
                            </button>
                            <button @click="tab = 'saksi'"
                                :class="tab === 'saksi' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Saksi
                            </button>
                            <button @click="tab = 'perkawinan'"
                                :class="tab === 'perkawinan' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Perkawinan
                            </button>
                            <button @click="tab = 'administrasi'"
                                :class="tab === 'administrasi' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Administrasi
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
                            @include('akta-perkawinan.tabs.data-ibu-suami')
                        </div>
                        <div x-show="tab === 'istri'">
                            @include('akta-perkawinan.tabs.data-istri')
                        </div>
                        <div x-show="tab === 'ayah_istri'">
                            @include('akta-perkawinan.tabs.data-ayah-istri')
                        </div>
                        <div x-show="tab === 'ibu_istri'">
                            @include('akta-perkawinan.tabs.data-ibu-istri')
                        </div>
                        <div x-show="tab === 'saksi'">
                            @include('akta-perkawinan.tabs.data-saksi')
                        </div>
                        <div x-show="tab === 'perkawinan'">
                            @include('akta-perkawinan.tabs.data-perkawinan')
                        </div>
                        <div x-show="tab === 'administrasi'">
                            @include('akta-perkawinan.tabs.data-administrasi')
                        </div>
                    </div>
                </div>
                {{-- End Tabs --}}
            </div>
        </div>
    </div>
</x-app-layout>

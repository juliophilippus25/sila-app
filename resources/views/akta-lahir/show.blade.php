@section('title', 'Detail Akta Lahir')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Akta Lahir') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if (auth()->user()->role == 'petugas' && $aktaLahir->status == 'pending')
                <div class="flex justify-end mb-4">
                    @include('akta-lahir.partials.forms.verification-modal')
                </div>

                @include('akta-lahir.partials.forms.rejected-modal')
            @endif

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                {{-- Tabs --}}
                <div x-data="{ tab: 'akta' }">
                    <div class="border-b border-gray-200 mb-4">
                        <nav class="-mb-px flex space-x-8 overflow-x-scroll pb-2">
                            <button @click="tab = 'akta'"
                                :class="tab === 'akta' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Akta Lahir
                            </button>
                            <button @click="tab = 'bayi_anak'"
                                :class="tab === 'bayi_anak' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Bayi/Anak
                            </button>
                            <button @click="tab = 'ayah'"
                                :class="tab === 'ayah' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Ayah
                            </button>
                            <button @click="tab = 'ibu'"
                                :class="tab === 'ibu' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Ibu
                            </button>
                            <button @click="tab = 'pelapor'"
                                :class="tab === 'pelapor' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Pelapor
                            </button>
                            <button @click="tab = 'saksi'"
                                :class="tab === 'saksi' ? 'border-indigo-500 text-indigo-600' :
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                Data Saksi
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
                            @include('akta-lahir.partials.tabs-show.akta-lahir')
                        </div>
                        <div x-show="tab === 'bayi_anak'">
                            @include('akta-lahir.partials.tabs-show.data-bayi-anak')
                        </div>
                        <div x-show="tab === 'ibu'">
                            @include('akta-lahir.partials.tabs-show.data-ibu')
                        </div>
                        <div x-show="tab === 'ayah'">
                            @include('akta-lahir.partials.tabs-show.data-ayah')
                        </div>
                        <div x-show="tab === 'pelapor'">
                            @include('akta-lahir.partials.tabs-show.data-pelapor')
                        </div>
                        <div x-show="tab === 'saksi'">
                            @include('akta-lahir.partials.tabs-show.data-saksi')
                        </div>
                        <div x-show="tab === 'administrasi'">
                            @include('akta-lahir.partials.tabs-show.data-administrasi')
                        </div>
                    </div>
                </div>
                {{-- End Tabs --}}
            </div>

            <div class="flex justify-start mt-4">
                <a href="{{ route('akta-lahir.index') }}"
                    class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

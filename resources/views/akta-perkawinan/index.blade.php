@section('title', 'Akta Perkawinan')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Akta Perkawinan') }}
        </h2>
    </x-slot>

    @if (auth()->user()->role == 'user')
        <div class="py-12">
            @if ($hasAktaPerkawinan && $hasAktaPerkawinan->status != 'rejected')
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        {{-- Tabs --}}
                        <div x-data="{ tab: 'akta' }">
                            <div class="border-b border-gray-200 mb-4">
                                <nav class="-mb-px flex space-x-8 overflow-x-scroll pb-2">
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
                                        Data Ayah Dari Istri
                                    </button>
                                    <button @click="tab = 'ibu_istri'"
                                        :class="tab === 'ibu_istri' ? 'border-indigo-500 text-indigo-600' :
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                        class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                        Data Ibu Dari Istri
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
                                    @include('akta-perkawinan.partials.tabs.akta-perkawinan')
                                </div>
                                <div x-show="tab === 'suami'">
                                    @include('akta-perkawinan.partials.tabs.data-suami')
                                </div>
                                <div x-show="tab === 'ayah_suami'">
                                    @include('akta-perkawinan.partials.tabs.data-ayah-suami')
                                </div>
                                <div x-show="tab === 'ibu_suami'">
                                    @include('akta-perkawinan.partials.tabs.data-ibu-suami')
                                </div>
                                <div x-show="tab === 'istri'">
                                    @include('akta-perkawinan.partials.tabs.data-istri')
                                </div>
                                <div x-show="tab === 'ayah_istri'">
                                    @include('akta-perkawinan.partials.tabs.data-ayah-istri')
                                </div>
                                <div x-show="tab === 'ibu_istri'">
                                    @include('akta-perkawinan.partials.tabs.data-ibu-istri')
                                </div>
                                <div x-show="tab === 'saksi'">
                                    @include('akta-perkawinan.partials.tabs.data-saksi')
                                </div>
                                <div x-show="tab === 'perkawinan'">
                                    @include('akta-perkawinan.partials.tabs.data-perkawinan')
                                </div>
                                <div x-show="tab === 'administrasi'">
                                    @include('akta-perkawinan.partials.tabs.data-administrasi')
                                </div>
                            </div>
                        </div>
                        {{-- End Tabs --}}
                    </div>
                </div>
            @else
                @if ($hasAktaPerkawinan && $hasAktaPerkawinan->status == 'rejected')
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 pb-12">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <p>Pengajuan akta perkawinan Anda sebelumnya berstatus
                                <span>
                                    <b class="text-red-600 uppercase">
                                        {{ $hasAktaPerkawinan->status }}
                                    </b>
                                </span>
                                , Anda dapat mengajukan akta perkawinan baru dengan mengisi form dibawah ini.
                            </p>
                        </div>
                    </div>
                @endif
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <form method="post" action="{{ route('akta-perkawinan.store') }}" class="space-y-6"
                            enctype="multipart/form-data" id="submit-form">
                            @csrf

                            <div id="stepper-form">
                                <div id="step-1" class="step-content">
                                    @include('akta-perkawinan.partials.data-suami-form')
                                </div>

                                <div id="step-2" class="step-content hidden">
                                    @include('akta-perkawinan.partials.data-ayah-dari-suami-form')
                                </div>

                                <div id="step-3" class="step-content hidden">
                                    @include('akta-perkawinan.partials.data-ibu-dari-suami-form')
                                </div>

                                <div id="step-4" class="step-content">
                                    @include('akta-perkawinan.partials.data-istri-form')
                                </div>

                                <div id="step-5" class="step-content hidden">
                                    @include('akta-perkawinan.partials.data-ayah-dari-istri-form')
                                </div>

                                <div id="step-6" class="step-content hidden">
                                    @include('akta-perkawinan.partials.data-ibu-dari-istri-form')
                                </div>

                                <div id="step-7" class="step-content hidden">
                                    @include('akta-perkawinan.partials.data-saksi-form')
                                </div>

                                <div id="step-8" class="step-content hidden">
                                    @include('akta-perkawinan.partials.data-perkawinan-form')
                                </div>

                                <div id="step-9" class="step-content hidden">
                                    @include('akta-perkawinan.partials.data-administrasi-form')
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <x-secondary-button id="prev-btn"
                                    type="button">{{ __('Previous') }}</x-secondary-button>
                                <x-primary-button id="next-btn" type="button">{{ __('Next') }}</x-primary-button>
                                <x-primary-button id="submit-btn" type="submit">{{ __('Submit') }}</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    @endif

    @if (auth()->user()->role != 'user')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <table id="table" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Suami</th>
                                <th>Nama Istri</th>
                                <th>Diverifikasi Oleh</th>
                                <th>Diajukan Oleh</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aktaPerkawinans as $aktaPerkawinan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $aktaPerkawinan->perkawinanSuami->nama_lengkap }}</td>
                                    <td>{{ $aktaPerkawinan->perkawinanIstri->nama_lengkap }}</td>
                                    <td>{{ $aktaPerkawinan->petugas->name ?? '-' }}</td>
                                    <td>{{ $aktaPerkawinan->user->name ?? '-' }}</td>
                                    <td>
                                        @if ($aktaPerkawinan->status == 'pending')
                                            <span
                                                class="text-yellow-400 uppercase"><b>{{ $aktaPerkawinan->status }}</b></span>
                                        @elseif($aktaPerkawinan->status == 'approved')
                                            <span
                                                class="text-green-400 uppercase"><b>{{ $aktaPerkawinan->status }}</b></span>
                                        @elseif($aktaPerkawinan->status == 'rejected')
                                            <span
                                                class="text-red-400 uppercase"><b>{{ $aktaPerkawinan->status }}</b></span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('akta-perkawinan.show', $aktaPerkawinan->id) }}"
                                            class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            Lihat
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif

    @section('scripts')
        @if (auth()->user()->role == 'user')
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const stepperForm = document.getElementById('stepper-form');
                    const steps = document.querySelectorAll('.step-content');
                    let currentStep = 0;
                    const nextButton = document.getElementById('next-btn');
                    const prevButton = document.getElementById('prev-btn');
                    const submitButton = document.getElementById('submit-btn');

                    // Function to show a specific step
                    function showStep(stepIndex) {
                        steps.forEach((step, index) => {
                            step.classList.add('hidden');
                            if (index === stepIndex) {
                                step.classList.remove('hidden');
                            }
                        });

                        // Update button visibility
                        if (stepIndex === steps.length - 1) {
                            nextButton.classList.add('hidden');
                            submitButton.classList.remove('hidden');
                        } else {
                            nextButton.classList.remove('hidden');
                            submitButton.classList.add('hidden');
                        }

                        if (stepIndex === 0) {
                            prevButton.classList.add('hidden');
                        } else {
                            prevButton.classList.remove('hidden');
                        }
                    }

                    // Next button handler
                    nextButton.addEventListener('click', function() {
                        if (currentStep < steps.length - 1) {
                            currentStep++;
                            showStep(currentStep);
                        }
                    });

                    // Previous button handler
                    prevButton.addEventListener('click', function() {
                        if (currentStep > 0) {
                            currentStep--;
                            showStep(currentStep);
                        }
                    });

                    // Initialize the first step
                    showStep(currentStep);
                });
            </script>
        @endif

        @if (auth()->user()->role != 'user')
            <script>
                $(document).ready(function() {
                    $('#table').DataTable({
                        searching: true, // Aktifkan pencarian
                        paging: true, // Aktifkan pagination
                        pageLength: 10, // Jumlah data per halaman
                        language: {
                            search: "Cari", // Label pencarian
                            searchPlaceholder: "{{ $dataType }}", // Placeholder pencarian
                            lengthMenu: "Tampilkan _MENU_ data per halaman", // Menu jumlah data per halaman
                            info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ {{ $dataType }}", // Info pagination
                            infoEmpty: "Tidak ada {{ $dataType }} yang tersedia", // Pesan saat tidak ada data
                            infoFiltered: "(difilter dari _MAX_ total data)", // Pesan saat data difilter
                            zeroRecords: "Tidak ada {{ $dataType }} yang ditemukan.", // Pesan saat tidak ada hasil
                            emptyTable: "Tidak ada {{ $dataType }} yang tersedia di tabel."
                        }
                    });
                });
            </script>
        @endif
    @endsection
</x-app-layout>

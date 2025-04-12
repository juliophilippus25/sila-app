@section('title', 'Akta Perkawinan')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Akta Perkawinan') }}
        </h2>
    </x-slot>

    @if (auth()->user()->role == 'user')
        <div class="py-12">
            @if ($hasAktaPerkawinan)
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <p>Anda sudah mendaftar akta perkawinan dan berstatus
                            <span class="uppercase text-yellow-400"><b>{{ $hasAktaPerkawinan->status }}!</b></span>
                        </p>
                    </div>
                </div>
            @else
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <form method="post" action="{{ route('akta-perkawinan.store') }}" class="space-y-6"
                            enctype="multipart/form-data">
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
                                        <a href="#"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
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

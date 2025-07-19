@section('title', 'Akta Lahir')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Akta Lahir') }}
        </h2>
    </x-slot>

    @if (auth()->user()->role == 'user')
        <div class="py-12">
            @if ($hasAktaLahir && $hasAktaLahir->status != 'rejected')
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
                                        Akta Lahir
                                    </button>
                                    <button @click="tab = 'bayi_anak'"
                                        :class="tab === 'bayi_anak' ? 'border-indigo-500 text-indigo-600' :
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                        class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                        Data Bayi/Anak
                                    </button>
                                    <button @click="tab = 'ibu'"
                                        :class="tab === 'ibu' ? 'border-indigo-500 text-indigo-600' :
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                        class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                        Data Ibu
                                    </button>
                                    <button @click="tab = 'ayah'"
                                        :class="tab === 'ayah' ? 'border-indigo-500 text-indigo-600' :
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                        class="whitespace-nowrap pb-4 px-1 border-b-2 font-medium text-sm">
                                        Data Ayah
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
                                    @include('akta-lahir.partials.tabs.akta-lahir')
                                </div>
                                <div x-show="tab === 'bayi_anak'">
                                    @include('akta-lahir.partials.tabs.data-bayi-anak')
                                </div>
                                <div x-show="tab === 'ibu'">
                                    @include('akta-lahir.partials.tabs.data-ibu')
                                </div>
                                <div x-show="tab === 'ayah'">
                                    @include('akta-lahir.partials.tabs.data-ayah')
                                </div>
                                <div x-show="tab === 'pelapor'">
                                    @include('akta-lahir.partials.tabs.data-pelapor')
                                </div>
                                <div x-show="tab === 'saksi'">
                                    @include('akta-lahir.partials.tabs.data-saksi')
                                </div>
                                <div x-show="tab === 'administrasi'">
                                    @include('akta-lahir.partials.tabs.data-administrasi')
                                </div>
                            </div>
                        </div>
                        {{-- End Tabs --}}
                    </div>
                </div>
            @else
                @if ($hasAktaLahir && $hasAktaLahir->status == 'rejected')
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 pb-12">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <p>Pengajuan akta lahir Anda sebelumnya berstatus
                                <span>
                                    <b class="text-red-600 uppercase">
                                        {{ $hasAktaLahir->status }}
                                    </b>
                                </span>
                                , Anda dapat mengajukan akta lahir baru dengan mengisi form dibawah ini.
                            </p>
                            <p>
                                Alasan pengajuan akta lahir Anda ditolak:
                                <span>
                                    <b class="text-red-600 uppercase">
                                        {{ $hasAktaLahir->alasan }}
                                    </b>
                                </span>
                            </p>
                        </div>
                    </div>
                @endif
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <form method="post" action="{{ route('akta-lahir.store') }}" class="space-y-6"
                            enctype="multipart/form-data" id="submit-form">
                            @csrf

                            <div id="stepper-form">
                                <div id="step-1" class="step-content">
                                    @include('akta-lahir.partials.forms.data-bayi-anak-form')
                                </div>

                                <div id="step-2" class="step-content hidden">
                                    @include('akta-lahir.partials.forms.data-ibu-form')
                                </div>

                                <div id="step-3" class="step-content hidden">
                                    @include('akta-lahir.partials.forms.data-ayah-form')
                                </div>

                                <div id="step-4" class="step-content">
                                    @include('akta-lahir.partials.forms.data-pelapor-form')
                                </div>

                                <div id="step-5" class="step-content hidden">
                                    @include('akta-lahir.partials.forms.data-saksi-form')
                                </div>

                                <div id="step-6" class="step-content hidden">
                                    @include('akta-lahir.partials.forms.data-administrasi-form')
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
                                <th>Nama Anak</th>
                                <th>Nama Ibu</th>
                                <th>Nama Ayah</th>
                                <th>Diverifikasi Oleh</th>
                                <th>Diajukan Oleh</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aktaLahirs as $aktaLahir)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $aktaLahir->lahirBayiAnak->nama_lengkap }}</td>
                                    <td>{{ $aktaLahir->lahirIbu->nama_lengkap }}</td>
                                    <td>{{ $aktaLahir->lahirAyah->nama_lengkap }}</td>
                                    <td>{{ $aktaLahir->petugas->name ?? '-' }}</td>
                                    <td>{{ $aktaLahir->user->name ?? '-' }}</td>
                                    <td>
                                        @if ($aktaLahir->status == 'pending')
                                            <span
                                                class="text-yellow-400 uppercase"><b>{{ $aktaLahir->status }}</b></span>
                                        @elseif($aktaLahir->status == 'approved')
                                            <span
                                                class="text-green-400 uppercase"><b>{{ $aktaLahir->status }}</b></span>
                                        @elseif($aktaLahir->status == 'rejected')
                                            <span
                                                class="text-red-400 uppercase"><b>{{ $aktaLahir->status }}</b></span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('akta-lahir.show', $aktaLahir->id) }}"
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

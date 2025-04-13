@section('title', 'Petugas')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Petugas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="flex justify-end mb-4">
                    @include('petugas.partials.add-modal-petugas-form')
                </div>
                <table id="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($petugas as $data)
                            <tr>
                                <td class="p-4">
                                    <p>{{ $data->name }}</p>
                                </td>
                                <td class="p-4">
                                    <p>{{ $data->nip }}</p>
                                </td>
                                <td class="p-4">
                                    <p>{{ $data->email }}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @section('scripts')
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
    @endsection
</x-app-layout>

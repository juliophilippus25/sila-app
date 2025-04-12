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
                <table class="w-full table-auto border-collapse">
                    <thead class="text-sm text-muted-2 bg-[#f8f9fa] border-b border-gray-200">
                        <tr>
                            <th class="p-4 text-left font-medium">NAMA</th>
                            <th class="p-4 text-left font-medium">NIP</th>
                            <th class="p-4 text-left font-medium">EMAIL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($petugas as $data)
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
                        @empty
                            <tr>
                                <td class="p-4" colspan="3">
                                    <p class="text-center">Tidak ada data</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

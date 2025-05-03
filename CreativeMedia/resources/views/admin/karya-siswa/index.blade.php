<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manajemen Karya Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{ confirmDeleteUrl: '' }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-6">
                <a href="{{ route('admin.karya-siswa.create') }}">
                    <x-primary-button>
                        {{ __('+ Tambah Karya Siswa') }}
                    </x-primary-button>
                </a>
            </div>

            {{-- Container Grid --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if (session('success'))
                        <div
                            class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 dark:bg-green-900 dark:border-green-700 dark:text-green-200 rounded">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div
                            class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 dark:bg-red-900 dark:border-red-700 dark:text-red-200 rounded">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @forelse ($karyaSiswas as $karya)
                            <div
                                class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden flex flex-col shadow hover:shadow-lg transition-shadow duration-200">
                                <div class="aspect-w-4 aspect-h-3 bg-gray-100 dark:bg-gray-700">
                                    @php
                                        $dbPath = $karya->gambar;
                                        $actualStoragePath = $dbPath;
                                     @endphp
                                    @if($actualStoragePath && Storage::disk('public')->exists($actualStoragePath))
                                        <img src="{{ Storage::url($actualStoragePath) }}"
                                            alt="Karya {{ $karya->nama_siswa ?? 'Siswa' }}" class="object-cover w-full h-full">
                                    @else
                                        <div class="flex items-center justify-center h-full"><span
                                                class="text-gray-400 text-sm italic">{{ $dbPath ? 'Image Missing' : 'No Image Path' }}</span>
                                        </div>
                                    @endif
                                </div>

                                <div class="p-4 flex flex-col flex-grow">
                                    <h3 class="font-semibold text-md mb-1 dark:text-white">
                                        {{ $karya->nama_siswa ?? 'Nama Siswa' }}
                                    </h3>
                                    <p class="text-xs text-orange-600 dark:text-orange-400 mb-2">
                                        {{ $karya->kursus ?? 'Kursus' }}
                                    </p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 flex-grow mb-3">
                                        {{ Str::limit($karya->deskripsi ?? 'Tidak ada deskripsi.', 80) }}
                                    </p>

                                    <div
                                        class="mt-auto pt-3 border-t border-gray-200 dark:border-gray-700 flex justify-end space-x-2">
                                        <a href="{{ route('admin.karya-siswa.edit', $karya->id) }}"
                                            class="text-xs text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-500 px-2 py-1 rounded hover:bg-indigo-100 dark:hover:bg-slate-700">Edit</a>
                                        <x-danger-button type="button" class="!text-xs !px-2 !py-1" x-on:click.prevent="
                                                        confirmDeleteUrl = '{{ route('admin.karya-siswa.destroy', $karya->id) }}';
                                                        $dispatch('open-modal', 'confirm-ks-deletion');
                                                    ">
                                            Hapus
                                        </x-danger-button>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="sm:col-span-2 md:col-span-3 lg:col-span-4 text-center text-gray-500 py-10">Belum ada
                                data karya siswa.</div>
                        @endforelse
                    </div>

                    {{-- Link Paginasi --}}
                    <div class="mt-8">{{ $karyaSiswas->links() }}</div>
                </div>
            </div>
        </div>

        <x-modal name="confirm-ks-deletion" :show="false" focusable>
            <div class="p-6 dark:bg-gray-800">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Konfirmasi Hapus Karya Siswa</h2>
                <div class="mt-6 flex items-start space-x-3">
                    <div class="flex-shrink-0"><svg class="h-6 w-6 text-red-600 dark:text-red-400"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg></div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-600 dark:text-gray-400">Apakah Anda yakin ingin menghapus karya
                            siswa ini? Tindakan ini tidak dapat dibatalkan.</p>
                    </div>
                </div>
                <div class="mt-6 flex justify-end space-x-3">
                    <x-secondary-button type="button"
                        x-on:click="$dispatch('close')">{{ __('Batal') }}</x-secondary-button>
                    {{-- Tombol Hapus dengan JS Submit --}}
                    <x-danger-button type="button" x-on:click="
                            let form = document.createElement('form');
                            form.method = 'POST';
                            form.action = confirmDeleteUrl;
                            let csrfInput = document.createElement('input');
                            csrfInput.type = 'hidden';
                            csrfInput.name = '_token';
                            csrfInput.value = '{{ csrf_token() }}';
                            form.appendChild(csrfInput);
                            let methodInput = document.createElement('input');
                            methodInput.type = 'hidden';
                            methodInput.name = '_method';
                            methodInput.value = 'DELETE';
                            form.appendChild(methodInput);
                            document.body.appendChild(form);
                            form.submit();
                            $dispatch('close');
                        ">
                        {{ __('Ya, Hapus') }}
                    </x-danger-button>
                </div>
            </div>
        </x-modal>
    </div>
</x-admin-layout>
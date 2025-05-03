<x-admin-layout>
    {{-- Header Halaman --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Bidang Studi Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- Form --}}
                    <form method="POST" action="{{ route('admin.bidang-studi.store') }}" class="space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="nama" :value="__('Nama Bidang Studi')" />
                            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="nama_ikon" :value="__('Nama Ikon (Opsional)')" />
                            <x-text-input id="nama_ikon" class="block mt-1 w-full" type="text" name="nama_ikon" :value="old('nama_ikon')" autocomplete="off" />
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Masukkan nama ikon (misal: 'computer', 'paint-brush').</p>
                            <x-input-error :messages="$errors->get('nama_ikon')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="deskripsi_singkat" :value="__('Deskripsi Singkat (Opsional)')" />
                             <textarea id="deskripsi_singkat" name="deskripsi_singkat" rows="4"
                                       class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                       >{{ old('deskripsi_singkat') }}</textarea>
                            <x-input-error :messages="$errors->get('deskripsi_singkat')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end space-x-4">
                            <a href="{{ route('admin.bidang-studi.index') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                                Batal
                            </a>
                            <x-primary-button>
                                {{ __('Simpan Bidang Studi') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Layanan Jasa Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 dark:text-gray-100">

                    <form method="POST" action="{{ route('admin.layanan-jasa.store') }}" enctype="multipart/form-data"
                        class="space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="nama" :value="__('Nama Layanan Jasa')" />
                            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama"
                                :value="old('nama')" required autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="ikon" :value="__('Nama Ikon (Opsional)')" />
                            <x-text-input id="ikon" class="block mt-1 w-full" type="text" name="ikon"
                                :value="old('ikon')" autocomplete="off" />
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Contoh: 'icon-computer',
                                'hero-paint-brush'.</p>
                            <x-input-error :messages="$errors->get('ikon')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="deskripsi_singkat" :value="__('Deskripsi Singkat (Opsional)')" />
                            <textarea id="deskripsi_singkat" name="deskripsi_singkat" rows="3"
                                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('deskripsi_singkat') }}</textarea>
                            <x-input-error :messages="$errors->get('deskripsi_singkat')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="konten_lengkap" :value="__('Konten Lengkap')" />
                            <textarea id="konten_lengkap" name="konten_lengkap" rows="10"
                                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                required>{{ old('konten_lengkap') }}</textarea>
                            <x-input-error :messages="$errors->get('konten_lengkap')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="gambar_header" :value="__('Gambar Header (Opsional)')" />
                            <input id="gambar_header"
                                class="block mt-1 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                type="file" name="gambar_header" accept="image/*">
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Format: JPG, PNG, GIF, WEBP. Maks
                                2MB.</p>
                            <x-input-error :messages="$errors->get('gambar_header')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end space-x-4 pt-2">
                            <a href="{{ route('admin.layanan-jasa.index') }}"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">Batal</a>
                            <x-primary-button>
                                {{ __('Simpan Layanan Jasa') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
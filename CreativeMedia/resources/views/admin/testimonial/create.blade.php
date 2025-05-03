<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Testimoni Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 dark:text-gray-100">

                    {{-- enctype untuk file upload --}}
                    <form method="POST" action="{{ route('admin.testimonial.store') }}" enctype="multipart/form-data"
                        class="space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="nama" :value="__('Nama')" />
                            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama"
                                :value="old('nama')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="perusahaan" :value="__('Perusahaan/Instansi (Opsional)')" />
                            <x-text-input id="perusahaan" class="block mt-1 w-full" type="text" name="perusahaan"
                                :value="old('perusahaan')" autocomplete="organization" />
                            <x-input-error :messages="$errors->get('perusahaan')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="foto" :value="__('Upload Foto (Opsional)')" />
                            <input id="foto"
                                class="block mt-1 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                type="file" name="foto" accept="image/*">
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Format: JPG, PNG, GIF, WEBP. Maks
                                1MB.</p>
                            <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="pesan" :value="__('Pesan Testimoni')" />
                            <textarea id="pesan" name="pesan" rows="5" required
                                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('pesan') }}</textarea>
                            <x-input-error :messages="$errors->get('pesan')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end space-x-4 pt-2">
                            <a href="{{ route('admin.testimonial.index') }}"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">Batal</a>
                            <x-primary-button>
                                {{ __('Simpan Testimoni') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
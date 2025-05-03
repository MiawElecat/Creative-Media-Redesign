<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Artikel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 dark:text-gray-100">

                    <form method="POST" action="{{ route('admin.artikel.update', $artikel->id) }}"
                        enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        {{-- Judul Artikel --}}
                        <div>
                            <x-input-label for="judul" :value="__('Judul Artikel')" />
                            <x-text-input id="judul" class="block mt-1 w-full" type="text" name="judul"
                                :value="old('judul', $artikel->judul)" required autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                        </div>

                        {{-- Excerpt/Ringkasan --}}
                        <div>
                            <x-input-label for="excerpt" :value="__('Ringkasan / Excerpt (Opsional)')" />
                            <textarea id="excerpt" name="excerpt" rows="3"
                                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('excerpt', $artikel->excerpt) }}</textarea>
                            <x-input-error :messages="$errors->get('excerpt')" class="mt-2" />
                        </div>

                        {{-- Konten Lengkap --}}
                        <div>
                            <x-input-label for="konten_lengkap" :value="__('Konten Lengkap')" />
                            <textarea id="konten_lengkap" name="konten_lengkap" rows="15" required
                                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('konten_lengkap', $artikel->konten_lengkap) }}</textarea>
                            <x-input-error :messages="$errors->get('konten_lengkap')" class="mt-2" />
                        </div>

                        {{-- Thumbnail --}}
                        <div>
                            <x-input-label for="thumbnail" :value="__('Ganti Thumbnail (Opsional)')" />
                            {{-- Tampilkan thumbnail saat ini --}}
                            @if($artikel->thumbnail && Storage::disk('public')->exists($artikel->thumbnail))
                                <div class="mt-2 mb-2">
                                    <img src="{{ Storage::url($artikel->thumbnail) }}" alt="Thumbnail {{ $artikel->judul }}"
                                        class="h-20 w-auto rounded shadow">
                                </div>
                            @endif
                            <input id="thumbnail"
                                class="block mt-1 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                type="file" name="thumbnail" accept="image/*">
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Kosongkan jika tidak ingin ganti
                                thumbnail. Maks 2MB.</p>
                            <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                        </div>

                        {{-- Status Publikasi --}}
                        <div class="block">
                            <label for="is_published" class="inline-flex items-center">
                                <input id="is_published" type="checkbox"
                                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                    name="is_published" value="1" @checked(old('is_published', $artikel->is_published))>
                                {{-- Cek status dari data --}}
                                <span
                                    class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Publikasikan Artikel') }}</span>
                            </label>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Jika dicentang, artikel akan tampil
                                di halaman publik.</p>
                            <x-input-error :messages="$errors->get('is_published')" class="mt-2" />
                        </div>

                        {{-- Tombol Aksi --}}
                        <div class="flex items-center justify-end space-x-4 pt-2">
                            <a href="{{ route('admin.artikel.index') }}"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">Batal</a>
                            <x-primary-button>
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
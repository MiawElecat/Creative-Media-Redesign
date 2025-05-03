<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Karya Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 dark:text-gray-100">

                    <form method="POST" action="{{ route('admin.karya-siswa.update', $karyaSiswa->id) }}"
                        enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="gambar" :value="__('Ganti Gambar Karya (Opsional)')" />
                            @if($karyaSiswa->gambar)
                                <div class="mt-2 mb-4">
                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Gambar saat ini:</p>
                                    <img src="{{ Storage::url($karyaSiswa->gambar) }}"
                                        alt="Karya {{ $karyaSiswa->nama_siswa ?? 'Siswa' }}"
                                        class="h-24 w-auto rounded shadow">
                                </div>
                            @endif
                            <input id="gambar"
                                class="block mt-1 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                type="file" name="gambar" accept="image/*">
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Kosongkan jika tidak ingin ganti
                                gambar. Format: JPG, PNG, GIF, WEBP. Maks 2MB.</p>
                            <x-input-error :messages="$errors->get('gambar')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="nama_siswa" :value="__('Nama Siswa (Opsional)')" />
                            <x-text-input id="nama_siswa" class="block mt-1 w-full" type="text" name="nama_siswa"
                                :value="old('nama_siswa', $karyaSiswa->nama_siswa)" autocomplete="off" />
                            <x-input-error :messages="$errors->get('nama_siswa')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="kursus" :value="__('Kursus/Kelas (Opsional)')" />
                            <x-text-input id="kursus" class="block mt-1 w-full" type="text" name="kursus"
                                :value="old('kursus', $karyaSiswa->kursus)" autocomplete="off" />
                            <x-input-error :messages="$errors->get('kursus')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="deskripsi" :value="__('Deskripsi Karya (Opsional)')" />
                            <textarea id="deskripsi" name="deskripsi" rows="5"
                                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('deskripsi', $karyaSiswa->deskripsi) }}</textarea>
                            <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                        </div>

                        <div class="block">
                            <label for="is_published" class="inline-flex items-center">
                                <input id="is_published" type="checkbox"
                                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                    name="is_published" value="1" @checked(old('is_published', $karyaSiswa->is_published))>
                                <span
                                    class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Tampilkan di Halaman Publik') }}</span>
                            </label>
                            <x-input-error :messages="$errors->get('is_published')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end space-x-4 pt-2">
                            <a href="{{ route('admin.karya-siswa.index') }}"
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
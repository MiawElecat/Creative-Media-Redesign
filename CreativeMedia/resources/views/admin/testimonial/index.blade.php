<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manajemen Testimoni') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{ confirmDeleteUrl: '' }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Tombol Tambah --}}
            <div class="flex justify-end mb-6">
                <a href="{{ route('admin.testimonial.create') }}">
                    <x-primary-button>
                        {{ __('+ Tambah Testimoni') }}
                    </x-primary-button>
                </a>
            </div>

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

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Foto</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Nama</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Perusahaan/Instansi</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Pesan</th>
                                    <th scope="col" class="relative px-6 py-3"><span class="sr-only">Aksi</span></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($testimonials as $testimonial)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if($testimonial->foto && Storage::disk('public')->exists($testimonial->foto))
                                                <img src="{{ Storage::url($testimonial->foto) }}"
                                                    alt="Foto {{ $testimonial->nama }}"
                                                    class="h-10 w-10 rounded-full object-cover">
                                            @else
                                                <img src="https://ui-avatars.com/api/?name={{ urlencode($testimonial->nama) }}&color=7F9CF5&background=EBF4FF"
                                                    alt="{{ $testimonial->nama }}" class="h-10 w-10 rounded-full object-cover">
                                            @endif
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                            {{ $testimonial->nama }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                            {{ $testimonial->perusahaan }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400 max-w-sm">
                                            <div class="truncate" title="{{ $testimonial->pesan }}">
                                                {{ Str::limit($testimonial->pesan, 100) }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                            <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}"
                                                class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600">Edit</a>
                                            <x-danger-button type="button" x-on:click.prevent="
                                                            confirmDeleteUrl = '{{ route('admin.testimonial.destroy', $testimonial->id) }}';
                                                            $dispatch('open-modal', 'confirm-testi-deletion');
                                                        ">
                                                Hapus
                                            </x-danger-button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"
                                            class="px-6 py-4 text-center text-sm text-gray-500 dark:text-gray-400">Belum ada
                                            data testimoni.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6">{{ $testimonials->links() }}</div>
                </div>
            </div>
        </div>

        <x-modal name="confirm-testi-deletion" :show="false" focusable>
            <div class="p-6 dark:bg-gray-800">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Konfirmasi Hapus Testimoni</h2>
                <div class="mt-6 flex items-start space-x-3">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" ...>...</svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-600 dark:text-gray-400">Apakah Anda yakin ingin menghapus testimoni
                            ini?</p>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <x-secondary-button type="button"
                        x-on:click="$dispatch('close')">{{ __('Batal') }}</x-secondary-button>
                    <x-danger-button type="button"
                        x-on:click="let form = document.createElement('form'); form.method = 'POST'; form.action = confirmDeleteUrl; let csrfInput = document.createElement('input'); csrfInput.type = 'hidden'; csrfInput.name = '_token'; csrfInput.value = document.querySelector('meta[name=csrf-token]').content; form.appendChild(csrfInput); let methodInput = document.createElement('input'); methodInput.type = 'hidden'; methodInput.name = '_method'; methodInput.value = 'DELETE'; form.appendChild(methodInput); document.body.appendChild(form); form.submit(); $dispatch('close');">
                        {{ __('Ya, Hapus') }}
                    </x-danger-button>
                </div>
            </div>
        </x-modal>
    </div>
</x-admin-layout>
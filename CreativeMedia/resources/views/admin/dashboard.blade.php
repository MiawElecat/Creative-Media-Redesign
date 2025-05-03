<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Selamat datang kembali, ") }} {{ Auth::user()->name }}!
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Artikel --}}
                <a href="{{ route('admin.artikel.index') }}"
                    class="block hover:shadow-lg transition-shadow duration-200">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg h-full flex flex-col">
                        <div class="p-6 flex items-start justify-between">
                            <div>
                                <h3 class="text-lg font-medium text-gray-500 dark:text-gray-400 mb-1">Total Artikel</h3>
                                <p class="text-3xl font-semibold text-gray-900 dark:text-gray-100">
                                    {{ $totalArtikel ?? 0 }}
                                </p>
                            </div>
                            <div class="p-3 bg-orange-100 dark:bg-orange-900/50 rounded-full">
                                <svg class="h-6 w-6 text-orange-600 dark:text-orange-400"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5" />
                                </svg>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-700/50 px-6 py-3 mt-auto text-right">
                            <span
                                class="text-xs font-medium text-orange-600 dark:text-orange-400 hover:text-orange-700 dark:hover:text-orange-300">Lihat
                                Detail &rarr;</span>
                        </div>
                    </div>
                </a>

                {{-- Testimoni --}}
                <a href="{{ route('admin.testimonial.index') }}"
                    class="block hover:shadow-lg transition-shadow duration-200">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg h-full flex flex-col">
                        <div class="p-6 flex items-start justify-between">
                            <div>
                                <h3 class="text-lg font-medium text-gray-500 dark:text-gray-400 mb-1">Total Testimoni
                                </h3>
                                <p class="text-3xl font-semibold text-gray-900 dark:text-gray-100">
                                    {{ $totalTestimoni ?? 0 }}
                                </p>
                            </div>
                            <div class="p-3 bg-indigo-100 dark:bg-indigo-900/50 rounded-full">
                                <svg class="h-6 w-6 text-indigo-600 dark:text-indigo-400"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                </svg>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-700/50 px-6 py-3 mt-auto text-right">
                            <span
                                class="text-xs font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-700 dark:hover:text-indigo-300">Lihat
                                Detail &rarr;</span>
                        </div>
                    </div>
                </a>

                {{-- Pesan Kontak --}}
                <a href="{{ route('admin.pesan-kontak.index') }}"
                    class="block hover:shadow-lg transition-shadow duration-200">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg h-full flex flex-col">
                        <div class="p-6 flex items-start justify-between">
                            <div>
                                <h3 class="text-lg font-medium text-gray-500 dark:text-gray-400 mb-1">Total Pesan Masuk
                                </h3>
                                <p class="text-3xl font-semibold text-gray-900 dark:text-gray-100">
                                    {{ $totalPesanKontak ?? 0 }}
                                </p>
                            </div>
                            <div class="p-3 bg-emerald-100 dark:bg-emerald-900/50 rounded-full">
                                <svg class="h-6 w-6 text-emerald-600 dark:text-emerald-400"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-700/50 px-6 py-3 mt-auto text-right">
                            <span
                                class="text-xs font-medium text-emerald-600 dark:text-emerald-400 hover:text-emerald-700 dark:hover:text-emerald-300">Lihat
                                Detail &rarr;</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-admin-layout>
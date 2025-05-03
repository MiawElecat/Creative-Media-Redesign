<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Error
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-10 text-gray-900 dark:text-gray-100 text-center">

                    <h1 class="text-6xl md:text-9xl font-bold text-orange-600 dark:text-orange-500 mb-4">
                       404
                    </h1>

                    <h2 class="text-2xl md:text-3xl font-semibold mb-3">
                       Halaman Tidak Ditemukan
                    </h2>

                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        Maaf, halaman yang Anda cari tidak dapat ditemukan atau mungkin telah dipindahkan.
                    </p>

                    <a href="{{ route('admin.dashboard') }}">
                        <x-primary-button>
                            Kembali ke Dashboard
                        </x-primary-button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
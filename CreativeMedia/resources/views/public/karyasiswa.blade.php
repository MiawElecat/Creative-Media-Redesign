@extends('layouts.public')

@section('title', 'Karya Siswa')

@section('content')
    <div class="container mx-auto px-4 py-10">
        {{-- Header Halaman --}}
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2 text-gray-800 dark:text-gray-800">Sekilas Karya Siswa Kami</h1>
            <p class="text-lg text-gray-600 dark:text-gray-600 max-w-3xl mx-auto">
                Bagaimana jika dibawah ini karya Anda? Fantastis bukan! Tunggu apalagi segera bergabung jangan mau
                ketinggalan.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse ($karyaSiswas as $karya)
                {{-- Card --}}
                <div class="karya-card bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out hover:shadow-xl group flex flex-col">
                    {{-- Gambar Karya --}}
                    <div class="aspect-w-4 aspect-h-3 bg-gray-100 dark:bg-gray-700 overflow-hidden relative">
                        {{-- @dd($karya->gambar, Storage::disk('public')->exists($karya->gambar))   --}}

                        @if($karya->gambar && Storage::disk('public')->exists($karya->gambar))
                            <img src="{{ Storage::url($karya->gambar) }}" 
                                 alt="Karya {{ $karya->nama_siswa ?? 'Siswa' }}"
                                 class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                                 {{-- onerror="this.onerror=null; this.src='https://placehold.co/400x300/e2e8f0/64748b?text=Error';"> --}}
                        @else
                            <div class="flex items-center justify-center h-full">
                                <span class="text-gray-400 text-sm italic">Gambar tidak tersedia</span>
                            </div>
                        @endif
                    </div>

                    <div class="p-4 flex flex-col flex-grow">
                        @if ($karya->nama_siswa || $karya->kursus)
                            <h4 class="font-medium text-sm text-gray-800 dark:text-gray-200 mb-1">
                                {{ $karya->nama_siswa ?? 'Siswa' }}
                                @if ($karya->kursus)
                                    <span class="text-gray-500 dark:text-gray-400 font-normal">- {{ $karya->kursus }}</span>
                                @endif
                            </h4>
                        @endif

                        <p class="text-xs text-gray-600 dark:text-gray-400 leading-relaxed flex-grow">
                            {{ $karya->deskripsi ?? 'Deskripsi karya tidak tersedia.' }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="col-span-1 sm:col-span-2 md:col-span-3 lg:col-span-4 text-center text-gray-500 py-16">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                    <h3 class="mt-2 text-sm font-semibold text-gray-900 dark:text-black">Belum ada karya siswa</h3>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-600">Silakan cek kembali nanti.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-12">
            {{ $karyaSiswas->links() }}
        </div>
    </div>
@endsection

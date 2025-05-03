@extends('layouts.public')

@section('title', 'Bidang Studi')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-4 text-center text-gray-800">Bidang Studi</h1>
    <p class="text-center mb-10 text-gray-600 max-w-2xl mx-auto">
        Creative Media menawarkan berbagai bidang studi yang mendukung pengembangan keterampilan digital dan kreatif.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        @forelse ($bidangStudi as $studi)
            {{-- Card Bidang Studi --}}
            <a href="{{ route('bidangstudi', ['slug' => $studi->slug]) }}"
               class="group block p-6 bg-white border border-gray-200 rounded-lg shadow-md
                      hover:shadow-lg hover:border-orange-300 hover:bg-orange-50
                      transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">

                <div class="mb-3">
                  <span class="inline-block p-3 bg-orange-100 rounded-full group-hover:bg-orange-200 transition">
                     <svg class="w-6 h-6 text-orange-600 group-hover:text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                  </span>
                </div>

                <h2 class="text-xl font-semibold text-gray-800 group-hover:text-orange-800 transition mb-2">{{ $studi->nama }}</h2>

                <p class="text-xs text-gray-500 mb-3">{{ $studi->deskripsi_singkat ?? '' }}</p>
                <p class="flex items-center text-sm text-orange-600 group-hover:text-orange-700 font-medium transition mt-auto pt-2"> {{-- mt-auto pt-2 untuk mendorong ke bawah jika deskripsi ada --}}
                    Lihat detail
                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </p>
            </a>
        @empty
             <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center text-gray-500 py-8">
                 <p>Belum ada data bidang studi untuk ditampilkan.</p>
             </div>
        @endforelse
    </div>
</div>
@endsection
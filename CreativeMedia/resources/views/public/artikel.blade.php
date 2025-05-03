@extends('layouts.public')

@section('title', 'Artikel & Berita Terbaru')

@section('content')
    <div class="container mx-auto px-4 py-10">
        {{-- Header Halaman --}}
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Update & News</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Dapatkan informasi dan update terbaru kami
            </p>
        </div>

        {{-- Grid Artikel --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($artikel as $item)
                <article
                    class="group flex flex-col bg-white rounded-lg shadow-lg overflow-hidden transition duration-300 ease-in-out hover:shadow-xl hover:-translate-y-1">

                    <a href="{{ route('artikel.detail', ['slug' => $item->slug]) }}" class="block overflow-hidden">
                        <img src="{{ $item->thumbnail ?? 'https://placehold.co/400x250/e2e8f0/64748b?text=Artikel' }}"
                            alt="Thumbnail {{ $item->judul }}"
                            class="w-full h-48 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105"
                            onerror="this.onerror=null; this.src='https://placehold.co/400x250/e2e8f0/64748b?text=Error';">
                    </a>

                    <div class="p-6 flex flex-col flex-grow">
                        <h5 class="text-lg font-semibold text-gray-900 mb-2 flex-grow">
                            <a href="{{ route('artikel.detail', ['slug' => $item->slug]) }}"
                                class="hover:text-orange-600 transition">
                                {{ Str::limit($item->judul, 70) }}
                            </a>
                        </h5>
                        <p class="text-sm text-gray-600 leading-relaxed mb-4">
                            {{ Str::limit($item->excerpt, 130) }}
                        </p>
                        <div class="mt-auto pt-3 border-t border-gray-200 flex justify-between items-center">
                            <span class="text-xs text-gray-500">
                                {{ $item->created_at ? $item->created_at->format('d M Y') : '' }}
                            </span>
                            <a href="{{ route('artikel.detail', ['slug' => $item->slug]) }}"
                                class="inline-flex items-center text-xs text-orange-600 hover:text-orange-800 font-medium transition group-hover:text-orange-700">
                                Baca Selengkapnya
                                <svg class="w-3 h-3 ml-1 group-hover:translate-x-0.5 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center text-gray-500 py-16">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                    <h3 class="mt-2 text-sm font-semibold text-gray-900">Belum ada artikel</h3>
                    <p class="mt-1 text-sm text-gray-500">Silakan cek kembali nanti.</p>
                </div>
            @endforelse
        </div>
        <div class="mt-12">
            {{ $artikel->links() }}
        </div>
    </div>
@endsection
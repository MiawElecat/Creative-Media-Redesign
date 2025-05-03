@extends('layouts.public')

@section('title', 'Layanan Jasa')

@section('content')
    <div class="container mx-auto px-4 py-10">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2 text-gray-800 dark:text-gray-800">Layanan Jasa Kami</h1>
            <p class="text-lg text-gray-600 dark:text-gray-600 max-w-3xl mx-auto">
                Kami menyediakan solusi digital profesional untuk kebutuhan bisnis Anda, mulai dari branding hingga
                pengembangan aplikasi.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse ($layananJasa as $layanan)
                {{-- Card --}}
                <a href="{{ route('layanan.detail', ['slug' => $layanan->slug]) }}"
                    class="group flex flex-col bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-1">

                    @if($layanan->gambar_header && Storage::disk('public')->exists($layanan->gambar_header))
                        <div class="block overflow-hidden aspect-w-16 aspect-h-9">
                            <img src="{{ Storage::url($layanan->gambar_header) }}" alt="Header {{ $layanan->nama }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out"
                                onerror="this.style.display='none'; this.parentElement.parentElement.querySelector('.fallback-icon').style.display='flex';">
                        </div>
                        <div
                            class="fallback-icon bg-gradient-to-br from-orange-50 to-orange-100 dark:from-slate-700 dark:to-slate-800 h-48 hidden items-center justify-center">
                            <span class="inline-block p-4 bg-white dark:bg-slate-600 rounded-full shadow">
                                <svg class="w-10 h-10 text-orange-300 dark:text-orange-400" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            </span>
                        </div>

                    @else

                        <div
                            class="bg-gradient-to-br from-orange-50 to-orange-100 dark:from-slate-700 dark:to-slate-800 h-48 flex items-center justify-center aspect-w-16 aspect-h-9">
                            <span class="inline-block p-4 bg-white dark:bg-slate-600 rounded-full shadow">
                                <svg class="w-10 h-10 text-orange-300 dark:text-orange-400" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    @if($layanan->ikon == 'paint-brush')
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                                    @elseif($layanan->ikon == 'globe-alt')
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                    @elseif($layanan->ikon == 'device-phone-mobile')
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                    @else
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.528-1.036.94-2.197 1.027-3.486l-5.877-5.877A2.652 2.652 0 002.75 7.11l3.031 2.495m4.634 5.559l-5.877-5.877m5.877 5.877l5.877 5.877" />
                                    @endif
                                </svg>
                            </span>
                        </div>
                    @endif

                    {{-- Konten Teks --}}
                    <div class="p-6 flex flex-col flex-grow text-center">
                        <h5
                            class="text-lg font-semibold text-gray-900 dark:text-gray-200 mb-2 group-hover:text-orange-600 transition">
                            {{ $layanan->nama }}
                        </h5>
                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed flex-grow mb-4">
                            {{ $layanan->deskripsi_singkat ?? 'Deskripsi layanan akan segera tersedia.' }}
                        </p>
                        <div class="mt-auto pt-2">
                            <span
                                class="inline-flex items-center text-sm text-orange-600 dark:text-orange-400 hover:text-orange-700 dark:hover:text-orange-300 font-medium transition group-hover:text-orange-500">
                                Pelajari Lebih Lanjut
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center text-gray-500 py-8">
                    <p>Belum ada data layanan jasa untuk ditampilkan.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .aspect-w-16 {
            position: relative;
            padding-bottom: 56.25%;
        }

        /* 16:9 */
        .aspect-h-9 {}

        .aspect-w-16>*,
        .aspect-h-9>* {
            position: absolute;
            height: 100%;
            width: 100%;
            inset: 0px;
            object-fit: cover;
        }
    </style>
@endpush
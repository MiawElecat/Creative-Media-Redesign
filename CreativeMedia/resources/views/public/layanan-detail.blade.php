@extends('layouts.public')

@section('title', $layanan->nama)

@section('content')
    <div class="container mx-auto px-4 py-10">
        <article class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
            @if($layanan->gambar_header)
                <img src="{{ asset('storage/' . $layanan->gambar_header) }}" alt="Header {{ $layanan->nama }}"
                    class="w-full h-64 object-cover" onerror="this.onerror=null; this.style.display='none';">
            @endif

            <div class="p-6 md:p-8 lg:p-10">
                <header class="entry-header mb-6 border-b border-gray-200 dark:border-gray-700 pb-4">
                    <h1 class="entry-title text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">
                        {{ $layanan->nama }}
                    </h1>
                </header>

                <div class="entry-content prose prose-lg dark:prose-invert max-w-none">
                    {!! $layanan->konten_lengkap !!}
                </div>
            </div>
        </article>
    </div>
@endsection

@push('styles')
    <style>
        .entry-content h2 {
            margin-top: 1.5em;
            margin-bottom: 0.5em;
            font-weight: 600;
        }

        .entry-content ul {
            list-style: disc;
            margin-left: 1.5em;
        }

        .entry-content img {
            max-width: 100%;
            height: auto;
            margin: 1em 0;
        }
    </style>
@endpush
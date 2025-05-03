@extends('layouts.public')

@section('title', 'Testimoni Alumni')

@section('content')
    <div class="container mx-auto px-4 py-10">
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Testimonials</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Apa yang mereka katakan setelah bergabung bersama kami
            </p>
        </div>

        {{-- Grid Testimoni --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            @forelse ($testimonials as $testi)
                <div
                    class="testimonial-card bg-white rounded-lg shadow-lg overflow-hidden flex flex-col sm:flex-row items-center p-6 border-l-4 border-orange-500">
                    <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-6">
                        <img src="{{ $testi->foto ?? 'https://placehold.co/80x80/e2e8f0/64748b?text=Foto' }}"
                            alt="Foto {{ $testi->nama }}"
                            class="w-20 h-20 rounded-full object-cover border-2 border-gray-200 shadow-sm"
                            onerror="this.onerror=null; this.src='https://placehold.co/80x80/e2e8f0/64748b?text=Error';">
                    </div>

                    <div class="flex-grow text-center sm:text-left">
                        {{-- Ikon Kutipan --}}
                        <div class="text-orange-500 mb-1 text-6xl font-serif leading-none text-left">
                            <span class="block -mt-2">"</span>
                        </div>
                        <blockquote class="text-gray-600 italic mb-4 text-base">
                            "{{ $testi->pesan ?? 'Testimoni tidak tersedia.' }}"
                        </blockquote>
                        <div class="client-info mt-auto">
                            <p class="font-semibold text-gray-800">{{ $testi->nama }}</p>
                            <p class="text-sm text-gray-500">{{ $testi->perusahaan ?? 'Instansi tidak diketahui' }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-1 md:col-span-2 text-center text-gray-500 py-8">
                    <p>Belum ada testimoni untuk ditampilkan.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-12">
            {{ $testimonials->links() }}
        </div>

    </div>
@endsection
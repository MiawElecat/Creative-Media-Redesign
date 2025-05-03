@extends('layouts.public')

@section('title', 'Hubungi Kami')

@section('content')

    <div class="mb-0">
        <img src="https://creativemedia.id/wp-content/uploads/2021/11/contact-us-2021.jpg" alt="Hubungi Creative Media"
            class="w-full h-auto max-h-80 object-cover"
            onerror="this.onerror=null; this.src='https://placehold.co/1600x650/cccccc/64748b?text=Hubungi+Kami';">
    </div>

    {{-- Konten Utama --}}
    <div class="container mx-auto px-4 py-10 -mt-16 md:-mt-24 relative z-10"> {{-- Tarik ke atas gambar --}}

        {{-- Card Putih Pembungkus --}}
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl p-6 md:p-10">

            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">Hubungi Kami</h1>
                <p class="text-lg text-gray-600 dark:text-gray-400">Kami selalu siap membantu Anda!</p>
                <div class="mt-4 w-24 h-1 bg-orange-500 mx-auto rounded"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">

                {{-- Info Kontak --}}
                <div class="space-y-8">
                    {{-- Surabaya Barat --}}
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-3 border-b pb-2">Surabaya Barat
                        </h2>
                        <div class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                            <p class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-orange-500 flex-shrink-0 mt-0.5"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <span>Kawasan Darmo Satelite Town<br>Jl. Tubanan Baru 10/K-15 Surabaya 60188</span>
                            </p>
                            <p class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                                </svg>
                                <a href=class="hover:text-orange-600 dark:hover:text-orange-400">031-7328 540</a>
                            </p>
                            <p class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                                </svg>
                                <a href=class="hover:text-orange-600 dark:hover:text-orange-400">0821 3131 4040 (Ayu)</a>
                            </p>
                            <p class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                                </svg>
                                <a href=class="hover:text-orange-600 dark:hover:text-orange-400">0822 4502 4842 (Audi)</a>
                            </p>
                            <p class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                    <path
                                        d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                </svg>
                                <a href="mailto:care@creativemedia.id"
                                    class="hover:text-orange-600 dark:hover:text-orange-400">care@creativemedia.id</a>
                            </p>
                        </div>
                    </div>

                    {{-- Surabaya Timur --}}
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-3 border-b pb-2">Surabaya Timur
                        </h2>
                        <div class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                            <p class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-orange-500 flex-shrink-0 mt-0.5"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <span>Jl. Nginden Intan Timur XVIII/A3-10 Surabaya 60118</span>
                            </p>
                            <p class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                                </svg>
                                <a href=class="hover:text-orange-600 dark:hover:text-orange-400">031-5917 3739</a>
                            </p>
                            <p class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                                </svg>
                                <a href=class="hover:text-orange-600 dark:hover:text-orange-400">0821 3131 0210 (Ulfa)</a>
                            </p>
                            <p class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                                </svg>
                                <a href=class="hover:text-orange-600 dark:hover:text-orange-400">0853 7000 1721 (Amie)</a>
                            </p>
                            <p class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                    <path
                                        d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                </svg>
                                <a href="mailto:nginden@creativemedia.id"
                                    class="hover:text-orange-600 dark:hover:text-orange-400">nginden@creativemedia.id</a>
                            </p>
                        </div>
                    </div>

                    {{-- Kota Tuban --}}
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-3 border-b pb-2">Kota Tuban</h2>
                        <div class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                            <p class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-orange-500 flex-shrink-0 mt-0.5"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <span>Graha Ronggolawe Blok H-6<br>Jl. Raya Bektiharjo Semanding – Tuban</span>
                            </p>
                            <p class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                                </svg>
                                <a href=class="hover:text-orange-600 dark:hover:text-orange-400">(0356) 8830 746</a>
                            </p>
                            <p class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                                </svg>
                                <a href=class="hover:text-orange-600 dark:hover:text-orange-400">0857 3647 7705 (Putri)</a>
                            </p>
                            <p class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                    <path
                                        d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                </svg>
                                <a href="mailto:tuban@creativemedia.id"
                                    class="hover:text-orange-600 dark:hover:text-orange-400">tuban@creativemedia.id</a>
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Form Kontak --}}
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Kirim Pesan</h3>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('info'))
                        <div class="mb-4 p-4 bg-blue-100 border border-blue-400 text-blue-700 rounded-lg" role="alert">
                            {{ session('info') }}
                        </div>
                    @endif

                    <form role="form" method="POST" action="{{ route('kontak.store') }}" class="space-y-4">
                        @csrf
                        <div>
                            <label for="myname" class="sr-only">Nama Anda</label>
                            <input type="text" name="myname" id="myname" placeholder="Nama Anda *" required
                                class="form-input w-full px-4 py-2 rounded-md bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 transition duration-200 ease-in-out"
                                value="{{ old('myname') }}">
                            {{-- Tampilkan error validasi nama (jika ada) --}}
                            @error('myname') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="myemail" class="sr-only">Email Anda</label>
                            <input type="email" name="myemail" id="myemail" placeholder="Email Anda *" required
                                class="form-input w-full px-4 py-2 rounded-md bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 transition duration-200 ease-in-out"
                                value="{{ old('myemail') }}">
                            @error('myemail') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="mysubject" class="sr-only">Subjek</label>
                            <input type="text" name="mysubject" id="mysubject" placeholder="Subjek *" required
                                class="form-input w-full px-4 py-2 rounded-md bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 transition duration-200 ease-in-out"
                                value="{{ old('mysubject') }}">
                            @error('mysubject') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="mymessage" class="sr-only">Pesan Anda</label>
                            <textarea name="mymessage" id="mymessage" rows="5" placeholder="Pesan Anda *" required
                                class="form-textarea w-full px-4 py-2 rounded-md bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 transition duration-200 ease-in-out">{{ old('mymessage') }}</textarea>
                            @error('mymessage') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button
                                class="btn w-full bg-orange-600 hover:bg-orange-700 text-white font-semibold px-6 py-3 rounded-md transition duration-300 ease-in-out shadow hover:shadow-md"
                                type="submit">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Peta Lokasi --}}
            <div class="mt-16">
                <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-8">Lokasi Kami di Peta</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    {{-- Peta Surabaya Barat --}}
                    <div class="text-center">
                        <h3 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Surabaya Barat</h3>
                        <div class="aspect-w-16 aspect-h-9 bg-gray-200 dark:bg-gray-700 rounded-lg overflow-hidden shadow">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7915.540840048818!2d112.685617!3d-7.266947!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fe9e83ac2c61%3A0xca8274bb2ee06d06!2sCREATIVE%20MEDIA!5e0!3m2!1sid!2sid!4v1745743345964!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    {{-- Peta Surabaya Timur --}}
                    <div class="text-center">
                        <h3 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Surabaya Timur</h3>
                        <div class="aspect-w-16 aspect-h-9 bg-gray-200 dark:bg-gray-700 rounded-lg overflow-hidden shadow">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7914.915148912745!2d112.770122!3d-7.302378!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa5691112989%3A0xfa01325a6e99771!2sCREATIVE%20MEDIA%20SURABAYA%20TIMUR!5e0!3m2!1sen!2sid!4v1745743411042!5m2!1sen!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    {{-- Peta Tuban --}}
                    <div class="text-center">
                        <h3 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Kota Tuban</h3>
                        <div class="aspect-w-16 aspect-h-9 bg-gray-200 dark:bg-gray-700 rounded-lg overflow-hidden shadow">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.248395561127!2d112.058073!3d-6.935439!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77bd9362c1a49f%3A0x559882c9300a63ad!2sCREATIVE%20MEDIA%20CAB.%20TUBAN!5e0!3m2!1sid!2sid!4v1745743432841!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
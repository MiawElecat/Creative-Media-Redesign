@extends('layouts.public')

@section('title', 'Beranda')

@push('styles')
    <style>
        @keyframes scrollLeft {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            animation: scrollLeft 40s linear infinite;
            width: fit-content;
            display: flex;
        }

        .marquee-container:hover .animate-marquee {
            animation-play-state: paused;
        }
    </style>
@endpush

@section('content')
    <section class="bg-gray-100 py-20 text-center">
        <h1 class="text-4xl font-bold text-gray-800">Selamat Datang di <span class="text-orange-600">CreativeMedia</span>
        </h1>
        <p class="mt-4 text-lg text-gray-600">Perusahaan Digital Agency & IT Consultant di Surabaya.</p>
        <a href={{ route('layanan') }}
            class="mt-6 inline-block bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-orange-700 transition">Lihat
            Layanan</a>
    </section>

    {{-- Image Slider Section --}}
    <section class="bg-gray-200 dark:bg-gray-800 py-8">
        <div class="container mx-auto max-w-7xl px-4 lg:px-8 relative">
            <div class="swiper beranda-slider overflow-hidden rounded-lg shadow-lg">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://creativemedia.id/wp-content/uploads/2025/03/banner-fb-150-dpi.jpg"
                            alt="Slider Image 1" class="w-full h-auto object-cover"
                            onerror="this.onerror=null; this.src='https://placehold.co/824x314/cccccc/64748b?text=Image+1';">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://creativemedia.id/wp-content/uploads/2021/07/Slider-2021-5.jpg"
                            alt="Slider Image 2" class="w-full h-auto object-cover"
                            onerror="this.onerror=null; this.src='https://placehold.co/824x305/cccccc/64748b?text=Image+2';">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://creativemedia.id/wp-content/uploads/2021/07/Slider-2021-4.jpg"
                            alt="Slider Image 3" class="w-full h-auto object-cover"
                            onerror="this.onerror=null; this.src='https://placehold.co/824x305/cccccc/64748b?text=Image+3';">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://creativemedia.id/wp-content/uploads/2021/07/Slider-2021-1.jpg"
                            alt="Slider Image 4" class="w-full h-auto object-cover"
                            onerror="this.onerror=null; this.src='https://placehold.co/824x305/cccccc/64748b?text=Image+4';">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://creativemedia.id/wp-content/uploads/2021/07/Slider-2021-2.jpg"
                            alt="Slider Image 5" class="w-full h-auto object-cover"
                            onerror="this.onerror=null; this.src='https://placehold.co/824x305/cccccc/64748b?text=Image+5';">
                    </div>

                    <div class="swiper-slide">
                        <img src="https://creativemedia.id/wp-content/uploads/2021/12/Slide-Website-Kursus-Pelatihan.jpg"
                            alt="Slider Image 6" class="w-full h-auto object-cover"
                            onerror="this.onerror=null; this.src='https://placehold.co/824x305/cccccc/64748b?text=Image+6';">
                    </div>
                </div>

                <div class="swiper-pagination"></div>

                <div
                    class="swiper-button-prev text-white bg-black bg-opacity-30 hover:bg-opacity-50 rounded-full w-10 h-10 after:text-sm transition">
                </div>
                <div
                    class="swiper-button-next text-white bg-black bg-opacity-30 hover:bg-opacity-50 rounded-full w-10 h-10 after:text-sm transition">
                </div>
            </div>
        </div>
    </section>

    {{-- Layanan Kami --}}
    <section id="layanan-kami" class="bg-gray-50 dark:bg-gray-800 py-16 px-4 lg:px-20">
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">Layanan Kami</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    IT & Multimedia Training, Branding & Design, Web Development, & Mobile Apps Development
                </p>
            </div>

            {{-- Grid Layanan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                {{-- Card 1: Course & Trainings --}}
                <div
                    class="service-card bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center transition duration-300 ease-in-out hover:shadow-xl hover:-translate-y-1 flex flex-col items-center">
                    <div class="mb-4 p-4 bg-orange-100 dark:bg-orange-900/50 rounded-full inline-block">
                        <svg class="w-10 h-10 text-orange-600 dark:text-orange-400" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <h5
                        class="text-lg font-semibold text-gray-800 dark:text-white mb-2 border-b-2 border-orange-500 pb-1 inline-block">
                        Course & Trainings</h5>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mt-2">
                        Kursus & Pelatihan Komputer IT Multimedia dengan biaya terjangkau serta bersaing meliputi bidang
                        studi Digital Marketing, Animasi, Photography, Graphic Design, Interior Design, Arsitektur Design,
                        Web Designer, Programming Web, Akuntansi, Video Editor, dll
                    </p>
                </div>

                {{-- Card 2: Branding & Design --}}
                <div
                    class="service-card bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center transition duration-300 ease-in-out hover:shadow-xl hover:-translate-y-1 flex flex-col items-center">
                    <div class="mb-4 p-4 bg-orange-100 dark:bg-orange-900/50 rounded-full inline-block">
                        <svg class="w-10 h-10 text-orange-600 dark:text-orange-400" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                        </svg>
                    </div>
                    <h5
                        class="text-lg font-semibold text-gray-800 dark:text-white mb-2 border-b-2 border-orange-500 pb-1 inline-block">
                        Branding & Design</h5>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mt-2">
                        Tingkatkan branding Perusahaan Anda dengan Designer yang tepat / ahlinya. Kami menyediakan jasa
                        Branding & Design guna meningkatkan produktivitas media komunikasi dan promosi perusahaan Anda
                        dengan harga yang bersaing serta mengutamakan kualitas desain terbaik.
                    </p>
                </div>

                {{-- Card 3: Web Development --}}
                <div
                    class="service-card bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center transition duration-300 ease-in-out hover:shadow-xl hover:-translate-y-1 flex flex-col items-center">
                    <div class="mb-4 p-4 bg-orange-100 dark:bg-orange-900/50 rounded-full inline-block">
                        <svg class="w-10 h-10 text-orange-600 dark:text-orange-400" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                        </svg>
                    </div>
                    <h5
                        class="text-lg font-semibold text-gray-800 dark:text-white mb-2 border-b-2 border-orange-500 pb-1 inline-block">
                        Web Development</h5>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mt-2">
                        Jasa pembuatan Website yang Menarik dan Powerfull (Company Profile, Toko On-line , E-Commerce,
                        Sekolah, Instansi Pemerintah, Forum, Komunitas, dll). Dilengkapi dengan fitur SEO (Search Engine
                        Optimizations) yang akan membuat website anda berada di halaman pertama Google.
                    </p>
                </div>

                {{-- Card 4: Mobile Apps Development --}}
                <div
                    class="service-card bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center transition duration-300 ease-in-out hover:shadow-xl hover:-translate-y-1 flex flex-col items-center">
                    <div class="mb-4 p-4 bg-orange-100 dark:bg-orange-900/50 rounded-full inline-block">
                        <svg class="w-10 h-10 text-orange-600 dark:text-orange-400" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                    </div>
                    <h5
                        class="text-lg font-semibold text-gray-800 dark:text-white mb-2 border-b-2 border-orange-500 pb-1 inline-block">
                        Mobile Apps Development</h5>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mt-2">
                        Konsultasikan dengan kami kebutuhan aplikasi mobile Anda, adanya aplikasi berbasis mobile (Android
                        dan iOS) yang Anda miliki mampu menjangkau customer secara luas serta informasi dapat diakses tanpa
                        batas oleh pelanggan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Lebih Dekat Dengan Kami --}}
    <section class="bg-gray-800 text-gray-300 py-16 px-4 lg:px-20">
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white mb-2">Lebih Dekat Dengan Kami</h2>
                <p class="text-lg text-orange-400 font-semibold">Creative Media merupakan Digital Agency & IT Consultant di
                    Surabaya</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-16">
                <div class="flex items-center justify-center lg:justify-start text-center lg:text-left">
                    <h3 class="text-2xl lg:text-3xl font-light leading-snug">
                        Hanya kami yang <b class="font-bold text-orange-400">BERANI</b> memberikan <b
                            class="font-bold text-orange-400">GARANSI 100% Sampai Bisa.</b>
                    </h3>
                </div>

                <div class="text-sm leading-relaxed">
                    <p class="mb-4">
                        Creative Media merupakan perusahaan Digital Agency & IT Consultant di Surabaya. Kami berfokus pada
                        Computer Course & Training, Branding & Design, Web Development & Mobile Apps Development.
                    </p>
                    <p class="mb-4">
                        Kami mempunyai 15 bidang studi unggulan yaitu: Komputer Umum & Internet, Desain Grafis, Animasi,
                        Digital Marketing, Desain Interior, Desain Arsiterktur, Administrasi Perkantoran, Komputer
                        Akuntansi, Editing Video Multimedia, Website Design CMS, Web Designer, Programming Web, Programming
                        Java Android, Photography.
                    </p>
                    <p>
                        Selain Kursus dan Pelatihan IT Multimedia kami menyediakan Devisi Development yang berfokus pada
                        Development Website, Sistem Aplikasi Perusahaan, Aplikasi Android & iOS, dll. Bagi Anda yang ingin
                        konsultasi terkait kebutuhan IT dan Digitalisasi sistem di Perusahaan bisa menghubungi Tim kami
                        untuk mendapatkan Solusi Terbaik.
                    </p>
                </div>

                {{-- Skill --}}
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="shrink-0 mr-3">
                            <span class="inline-block p-2 bg-gray-700 rounded-full">
                                <svg class="w-5 h-5 text-orange-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">PELATIHAN IT & MULTIMEDIA</h4>
                            <p class="text-xs text-gray-400 leading-relaxed">Sejak 2014, lebih dari 3000 siswa maupun
                                perusahaan sudah mempercayakan lembaga kami sebagai mitra pelatihan terbaik.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="shrink-0 mr-3">
                            <span class="inline-block p-2 bg-gray-700 rounded-full">
                                <svg class="w-5 h-5 text-orange-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">BRANDING & DESIGN</h4>
                            <p class="text-xs text-gray-400 leading-relaxed">Berbagai project Branding & Design perusahan
                                sudah kami selesaikan, konsultasikan sekarang dengan kami.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="shrink-0 mr-3">
                            <span class="inline-block p-2 bg-gray-700 rounded-full">
                                <svg class="w-5 h-5 text-orange-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">WEB DEVELOPMENT</h4>
                            <p class="text-xs text-gray-400 leading-relaxed">Kami merancang sistem website & aplikasi
                                web-based sesuai dengan kebutuhan Perusahaan Swasta, BUMN & Pemerintahan.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="shrink-0 mr-3">
                            <span class="inline-block p-2 bg-gray-700 rounded-full">
                                <svg class="w-5 h-5 text-orange-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">MOBILE APPS DEVELOPMENT</h4>
                            <p class="text-xs text-gray-400 leading-relaxed">Kami membuat aplikasi Android & iOS sesuai
                                dengan kebutuhan Perusahaan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kami Dipercaya Oleh --}}
            <div class="border-t border-gray-700 dark:border-gray-600 pt-10">
                <h5 class="text-center text-lg font-semibold text-white dark:text-gray-200 mb-8">Kami Dipercaya Oleh :</h5>
                <div class="marquee-container w-full overflow-hidden relative py-4">
                    <div class="animate-marquee flex items-center whitespace-nowrap">
                        @php
                            $logos = $logos ?? [
                                ['url' => 'http://focustradingcontractor.com/', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/08/Focus-Trading-Contractor.png', 'alt' => 'Focus Trading Contractor'],
                                ['url' => 'http://tagsproperti.com/', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/11/Tags-Property.png', 'alt' => 'Tags Property'],
                                ['url' => 'http://tmadining.com/home.php', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/01/Jasa-Desain-Murah-di-Surabaya.png', 'alt' => 'TMA Dining'],
                                ['url' => 'http://bcjuanda.beacukai.go.id/', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/11/Bea-dan-Cukai.png', 'alt' => 'Bea dan Cukai'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/08/Grazioso-Creative-Media.png', 'alt' => 'Grazioso'],
                                ['url' => 'http://www.loveexoticcars.com/', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/04/Logo-Love-Exotic-Cars1.png', 'alt' => 'Love Exotic Cars'],
                                ['url' => 'http://wessi-group.com/', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/11/Wessi.png', 'alt' => 'Wessi Group'],
                                ['url' => 'http://sekawanintiplast.com/', 'src' => 'http://creativemedia.id/wp-content/uploads/2016/04/sekawan-intiplast.png', 'alt' => 'Sekawan Intiplast'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/11/Rumah-Singgah.png', 'alt' => 'Rumah Singgah'],
                                ['url' => 'http://www.aromasakti.com/', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/04/aromasakti.png', 'alt' => 'Aroma Sakti'],
                                ['url' => 'http://www.venturaplus.net/', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/04/LogoVenturaplus.png', 'alt' => 'Ventura Plus'],
                                ['url' => 'http://timurjayaindosteel.com/', 'src' => 'http://creativemedia.id/wp-content/uploads/2016/04/Logo-Timur-Jaya-Indostell-New.png', 'alt' => 'Timur Jaya Indosteel'],
                                ['url' => 'http://www.metrovin.co.id/', 'src' => 'http://creativemedia.id/wp-content/uploads/2016/04/metrovin.png', 'alt' => 'Metrovin'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/11/Sinar-Tirta-makmur1.png', 'alt' => 'Sinar Tirta Makmur'],
                                ['url' => 'http://www.kamadjaja.com/', 'src' => 'http://creativemedia.id/wp-content/uploads/2016/04/Kamadjaja.png', 'alt' => 'Kamadjaja Logistics'],
                                ['url' => 'http://www.bangikopitiam.com/', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/04/Bangikopitiam1.png', 'alt' => 'Bangi Kopitiam'],
                                ['url' => 'http://jawapos.com/', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/11/jawapos1.png', 'alt' => 'Jawa Pos'],
                                ['url' => 'http://metrovin.co.id', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/11/Pt.-Lestari-Putra.png', 'alt' => 'PT Lestari Putra'],
                                ['url' => 'http://mobilhondasejatim.com/', 'src' => 'http://creativemedia.id/wp-content/uploads/2016/04/Honda1.png', 'alt' => 'Honda Sejatim'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2015/11/PT.-Surabaya-Auto-comp.png', 'alt' => 'PT Surabaya Auto Comp'],
                                ['url' => 'http://thepalladiumgroup.com/', 'src' => 'http://creativemedia.id/wp-content/uploads/2016/04/Logo-Palladium-Group.jpg', 'alt' => 'Palladium Group'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2016/04/Autralia-Awards-Logo.png', 'alt' => 'Australia Awards'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/ss.png', 'alt' => 'SS (Client Logo)'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/ap-logo-primer.png', 'alt' => 'AP (Client Logo)'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/PT-Lagaira-Nusantara-Terbang_ok.png', 'alt' => 'PT Lagaira Nusantara Terbang'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/FUHANG-e1504853751285.png', 'alt' => 'Fuhang'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/SPI.png', 'alt' => 'SPI'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/logo_cody.png', 'alt' => 'Cody'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/TPS.png', 'alt' => 'TPS'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/UNAIR_ok.png', 'alt' => 'UNAIR'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/logo-Pelindo-Marine-Service.png', 'alt' => 'Pelindo Marine Service'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/logo-jdihjatim-redz.png', 'alt' => 'JDIH Jatim'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/bri-university.png', 'alt' => 'BRI University'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/mandala_ok.png', 'alt' => 'Mandala'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/dinas-pekerja-umum_ok.png', 'alt' => 'Dinas Pekerjaan Umum'],
                                ['url' => '#', 'src' => 'http://creativemedia.id/wp-content/uploads/2017/09/pt-varia-usaha_ok.png', 'alt' => 'PT Varia Usaha'],
                            ];
                        @endphp

                        @foreach ($logos as $logo)
                            <a href="{{ $logo['url'] }}" target="_blank"
                                class="inline-block flex-shrink-0 opacity-70 hover:opacity-100 transition duration-300 px-6">
                                {{-- jarak antar logo --}}
                                <img src="{{ $logo['src'] }}" alt="{{ $logo['alt'] }}" class="max-h-12 w-auto">
                            </a>
                        @endforeach
                        @foreach ($logos as $logo)
                            <a href="{{ $logo['url'] }}" target="_blank" aria-hidden="true"
                                class="inline-block flex-shrink-0 opacity-70 hover:opacity-100 transition duration-300 px-6">
                                <img src="{{ $logo['src'] }}" alt="{{ $logo['alt'] }}" class="max-h-12 w-auto">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tim Kami --}}
    <section class="bg-white py-16 px-4 lg:px-20">
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Tim Kami</h2>
                <p class="text-lg text-gray-600">
                    Tim kami dari kalangan <b>Praktisi, Dosen</b> dan <b>Akademisi Profesional</b> yang berpengalaman
                    dibidangnya
                </p>
            </div>

            {{-- Anggota Tim --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse ($tim as $anggota)
                    <div
                        class="team-member bg-gray-50 p-6 rounded-lg shadow-md text-center transition duration-300 ease-in-out hover:shadow-xl hover:-translate-y-1">
                        <figure class="mb-4">
                            <img src="{{ $anggota->foto ?? 'https://placehold.co/128x128/e2e8f0/64748b?text=Foto' }}"
                                alt="Foto {{ $anggota->nama }}"
                                class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-gray-200"
                                onerror="this.onerror=null; this.src='https://placehold.co/128x128/e2e8f0/64748b?text=Error';">
                        </figure>
                        <div class="member-details">
                            <h5 class="text-lg font-semibold text-gray-800 mb-1">{{ $anggota->nama }}</h5>
                            <div class="position text-sm text-orange-600 font-medium mb-3">{{ $anggota->posisi }}</div>
                            <div class="details text-xs text-gray-600 leading-relaxed">
                                {{ $anggota->deskripsi ?? 'Deskripsi tidak tersedia.' }}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-1 sm:col-span-2 lg:col-span-4 text-center text-gray-500 py-8">
                        <p>Belum ada data anggota tim untuk ditampilkan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Bergabung Bersama Kami --}}
    <section class="bg-orange-600 py-12 text-center text-white">
        <h2 class="text-2xl font-bold">Bergabunglah Bersama Kami</h2>
        <p class="mt-2 text-lg">Dapatkan pelatihan dan layanan terbaik dari tim profesional kami.</p>
        <div class="mt-6 space-x-4">
            <a href="https://tubanan.creativemedia.id/?_gl=1*12d60pn*_ga*MTA1MDMzNTIzNS4xNzQ1NTQ5NDEw*_ga_D4MDRGXEK3*MTc0NTYyNDIyMS45LjEuMTc0NTYyNTM5NC4wLjAuMA.."
                target="_blank"
                class="inline-block bg-white text-orange-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition shadow-md hover:shadow-lg">
                Daftar Sekarang
            </a>
            <a href="{{ route('kontak') }}"
                class="mt-4 inline-block bg-white text-orange-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Hubungi Kami</a>
        </div>
    </section>

    <section id="testimonials" class="bg-gray-100 dark:bg-gray-900 py-16 px-4 lg:px-20">
        <div class="container mx-auto max-w-7xl">
            {{-- Header --}}
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">Testimonials</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Apa yang mereka katakan setelah bergabung bersama kami
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($testimonials as $testi)
                    <div
                        class="testimonial-card bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg flex flex-col transition-transform duration-200 hover:scale-105 hover:shadow-xl">
                        <div class="text-orange-500 dark:text-orange-400 mb-2 text-5xl font-serif leading-none">
                            <span class="block -mt-2">"</span>
                        </div>
                        <blockquote class="text-gray-600 dark:text-gray-300 italic flex-grow mb-4">
                            "{{ $testi->pesan ?? 'Testimoni tidak tersedia.' }}"
                        </blockquote>
                        <hr class="border-gray-200 dark:border-gray-600 my-4">
                        <div class="client-info flex items-center">
                            <img src="{{ $testi->foto ?? 'https://placehold.co/64x64/e2e8f0/64748b?text=Foto' }}"
                                alt="Foto {{ $testi->nama }}" class="w-12 h-12 rounded-full mr-4 object-cover flex-shrink-0"
                                onerror="this.onerror=null; this.src='https://placehold.co/64x64/e2e8f0/64748b?text=Error';">
                            <div>
                                <p class="font-semibold text-gray-800 dark:text-white">{{ $testi->nama }}</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">
                                    {{ $testi->perusahaan ?? 'Instansi tidak diketahui' }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center text-gray-500 py-8">
                        <p>Belum ada testimoni untuk ditampilkan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Testimoni Detail --}}
    <section class="bg-gray-100 dark:bg-gray-800 py-12 px-4 lg:px-20">
        <div class="container mx-auto max-w-7xl">
            <div
                class="flex flex-col md:flex-row items-center justify-between bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg">
                <div class="text-center md:text-left mb-6 md:mb-0 md:mr-6">
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">
                        Lihat lebih banyak testimoni alumni kami sekarang!
                    </h3>
                </div>
                <div class="flex-shrink-0">
                    <a href={{ route('testimoni') }}
                        class="inline-block bg-orange-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-orange-700 transition shadow hover:shadow-md">
                        Lebih Detail
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Artikel Terbaru (Update & News) --}}
    <section id="latest-news" class="bg-white dark:bg-gray-800 py-16 px-4 lg:px-20">
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">Update & News</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Dapatkan informasi dan update terbaru kami
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @php
                    $artikelTerbaru = [
                        [
                            'judul' => 'Bangun Karier Digital Lebih Cepat, Tanpa Harus Tunggu Gelar Sarjana',
                            'link' => 'https://creativemedia.id/bangun-karier-digital-lebih-cepat-tanpa-harus-tunggu-gelar-sarjana/',
                            'thumbnail' => 'https://creativemedia.id/wp-content/uploads/2025/04/Bangun-Karier-Digital-Lebih-Cepat-Tanpa-Harus-Tunggu-Gelar-Sarjana-cover-250x250.jpg',
                            'excerpt' => 'Dulu, gelar sarjana dianggap satu-satunya jalan menuju kesuksesan. Namun kini, dunia telah berubah. Di era digital, skill dan portofolio justru lebih cepat membuka peluang...'
                        ],
                        [
                            'judul' => 'Bangun Karier Tanpa Gelar? Skill Digital Adalah Kuncinya',
                            'link' => 'https://creativemedia.id/bangun-karier-tanpa-gelar-skill-digital-adalah-kuncinya/',
                            'thumbnail' => 'https://creativemedia.id/wp-content/uploads/2025/04/Bangun-Karier-Tanpa-Gelar-Skill-Digital-Adalah-Kuncinya-cover-250x250.jpg',
                            'excerpt' => 'Di era digital saat ini, memiliki ijazah saja tidak lagi menjadi satu-satunya syarat. Perusahaan kini lebih peduli pada apa yang bisa kamu lakukan dibanding dari mana kamu lulus...'
                        ],
                        [
                            'judul' => 'Desain Bukan Cuma Estetik, Tapi Cara Berpikir',
                            'link' => 'https://creativemedia.id/desain-bukan-cuma-estetik-tapi-cara-berpikir/',
                            'thumbnail' => 'https://creativemedia.id/wp-content/uploads/2025/04/Desain-Bukan-Cuma-Estetik-Tapi-Cara-Berpikir-cover-250x250.jpg',
                            'excerpt' => 'Ketika mendengar kata desain, kebanyakan orang langsung membayangkan bentuk atau tampilan visual. Padahal, desain bukan hanya soal estetika. Desain adalah cara berpikir...'
                        ],
                    ];
                @endphp

                @forelse ($artikelTerbaru as $artikel)
                    <div
                        class="article-card bg-gray-50 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden flex flex-col transition duration-300 ease-in-out hover:shadow-xl">
                        <a href="{{ $artikel['link'] }}" target="_blank">
                            <img src="{{ $artikel['thumbnail'] ?? 'https://placehold.co/400x250/e2e8f0/64748b?text=Artikel' }}"
                                alt="Thumbnail {{ $artikel['judul'] }}" class="w-full h-48 object-cover"
                                onerror="this.onerror=null; this.src='https://placehold.co/400x250/e2e8f0/64748b?text=Error';">
                        </a>

                        <div class="p-6 flex flex-col flex-grow">
                            <h5 class="text-lg font-semibold text-gray-800 dark:text-white mb-2 flex-grow">
                                <a href="{{ $artikel['link'] }}" target="_blank"
                                    class="hover:text-orange-600 dark:hover:text-orange-400 transition">
                                    {{ Str::limit($artikel['judul'], 60) }}
                                </a>
                            </h5>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                                {{ Str::limit($artikel['excerpt'], 120) }}
                            </p>
                            <div class="mt-auto pt-2">
                                <a href="{{ $artikel['link'] }}" target="_blank"
                                    class="text-sm text-orange-600 dark:text-orange-400 hover:text-orange-700 dark:hover:text-orange-300 font-medium transition inline-flex items-center">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center text-gray-500 py-8">
                        <p>Belum ada berita atau update terbaru.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>

    {{-- Contact Us --}}
    <section id="contact" class="bg-gray-800 dark:bg-gray-900 py-16 px-4 lg:px-20">
        <div class="container mx-auto max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white mb-2">Hubungi Kami</h2>
                <p class="text-lg text-gray-400">
                    Silahkan kirimkan pertanyaan / pesan dengan mengisi form singkat dibawah ini, tim kami akan merespon
                    dengan cepat!
                </p>
            </div>

            <form role="form" method="POST" action="{{ route('kontak') }}" class="contact-form">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div>
                        <label for="myname" class="sr-only">Nama Anda</label>
                        <input type="text" name="myname" id="myname" placeholder="Nama Anda" required
                            class="form-input w-full px-4 py-3 rounded-lg bg-gray-700 dark:bg-gray-800 border border-gray-600 dark:border-gray-700 text-gray-200 dark:text-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 transition duration-200 ease-in-out"
                            value="{{ old('myname') }}">
                    </div>

                    <div>
                        <label for="myemail" class="sr-only">Email Anda</label>
                        <input type="email" name="myemail" id="myemail" placeholder="Email Anda" required
                            class="form-input w-full px-4 py-3 rounded-lg bg-gray-700 dark:bg-gray-800 border border-gray-600 dark:border-gray-700 text-gray-200 dark:text-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 transition duration-200 ease-in-out"
                            value="{{ old('myemail') }}">
                    </div>

                    <div>
                        <label for="mysubject" class="sr-only">Subjek</label>
                        <input type="text" name="mysubject" id="mysubject" placeholder="Subjek" required
                            class="form-input w-full px-4 py-3 rounded-lg bg-gray-700 dark:bg-gray-800 border border-gray-600 dark:border-gray-700 text-gray-200 dark:text-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 transition duration-200 ease-in-out"
                            value="{{ old('mysubject') }}">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="mymessage" class="sr-only">Pesan Anda</label>
                    <textarea name="mymessage" id="mymessage" rows="5" placeholder="Pesan Anda" required
                        class="form-textarea w-full px-4 py-3 rounded-lg bg-gray-700 dark:bg-gray-800 border border-gray-600 dark:border-gray-700 text-gray-200 dark:text-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 transition duration-200 ease-in-out">{{ old('mymessage') }}</textarea>
                </div>

                <div class="text-center">
                    <button
                        class="btn bg-orange-600 hover:bg-orange-700 text-white font-semibold px-8 py-3 rounded-lg transition duration-300 ease-in-out shadow hover:shadow-md"
                        type="submit">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </section>
    </main>

@endsection
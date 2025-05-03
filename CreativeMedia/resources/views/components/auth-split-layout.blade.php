<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} - Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    @stack('styles')
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <div x-data="{ isLogin: {{ Route::is('login') ? 'true' : 'false' }} }"
         class="min-h-screen flex items-center justify-center p-4">
        {{-- Card Utama --}}
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden w-full max-w-4xl lg:grid lg:grid-cols-2">

            <div :class="{ 'lg:order-1': isLogin, 'lg:order-2': !isLogin }"
                 class="relative px-6 py-10 sm:px-12 sm:py-12 overflow-hidden">
                <div class="relative h-full min-h-[400px]">

                    {{-- Form Login --}}
                    <div x-show="isLogin"
                         x-transition:enter="transition ease-out duration-500 transform"
                         x-transition:enter-start="opacity-0 translate-x-1/2"
                         x-transition:enter-end="opacity-100 translate-x-0"
                         x-transition:leave="transition ease-in duration-300 transform absolute top-0 left-0 w-full"
                         x-transition:leave-start="opacity-100 translate-x-0"
                         x-transition:leave-end="opacity-0 -translate-x-1/2"
                         class="w-full">
                        {{ $loginForm }}
                    </div>

                    {{-- Form Register --}}
                    <div x-show="!isLogin"
                         x-transition:enter="transition ease-out duration-500 transform"
                         x-transition:enter-start="opacity-0 -translate-x-1/2"
                         x-transition:enter-end="opacity-100 translate-x-0"
                         x-transition:leave="transition ease-in duration-300 transform absolute top-0 left-0 w-full"
                         x-transition:leave-start="opacity-100 translate-x-0"
                         x-transition:leave-end="opacity-0 translate-x-1/2"
                         class="w-full" style="display: none;">
                        {{ $registerForm }}
                    </div>
                </div>
            </div>

             <div :class="{ 'lg:order-2': isLogin, 'lg:order-1': !isLogin }"
                 class="hidden lg:block relative p-12 bg-gradient-to-br from-orange-400 to-orange-600 text-white">
                {{-- Konten Panel Visual --}}
                <div class="relative z-10 flex flex-col justify-between h-full">
                    <div>
                        <a href="/" class="inline-block mb-8">
                            <img class="h-10 w-auto"
                                 src="http://creativemedia.id/wp-content/uploads/2020/01/kecil6-1.png"
                                 alt="Creative Media Corp.">
                        </a>
                        {{-- Teks untuk state Login --}}
                        <div x-show="isLogin" x-transition:enter="transition ease-out duration-300 delay-50" x-transition:enter-start="opacity-0 transform -translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0">
                            <h2 class="text-3xl font-bold mb-3">Admin Login</h2>
                            <p class="text-orange-100">Selamat datang, silahkan masuk ke akun Anda.</p>
                        </div>
                         {{-- Teks untuk state Register --}}
                        <div x-show="!isLogin" x-transition:enter="transition ease-out duration-300 delay-50" x-transition:enter-start="opacity-0 transform translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0" style="display: none;">
                             <h2 class="text-3xl font-bold mb-3">Register Admin</h2>
                             <p class="text-orange-100">Lengkapi form untuk mendaftar sebagai admin.</p>
                        </div>
                    </div>
                    <p class="text-xs text-orange-200 mt-12">&copy; {{ date('Y') }} Creative Media Corp.</p>
                </div>
            </div>

        </div>
    </div>
    @stack('scripts')
</body>

</html>
<!DOCTYPE html>
<html lang="id" x-data="{ showScrollToTop: false }" x-init="
          window.onscroll = () => {
              showScrollToTop = (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400);
          };
      ">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Creative Media')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('styles')
</head>

<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

  {{-- Navbar --}}
  @include('partials.navbar')

  {{-- Konten Halaman --}}
  <main class="py-6 flex-grow">
    @yield('content')
  </main>

  <footer class="bg-gray-800 text-gray-300 pt-12 pb-8 px-4 mt-auto">
    <div class="container mx-auto max-w-7xl">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">

        {{-- Lokasi --}}
        <div class="text-sm">
          <div class="flex items-center mb-3">
            <svg class="w-6 h-6 mr-2 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
            </svg>
            <h3 class="font-semibold text-white uppercase tracking-wider">Lokasi Kami</h3>
          </div>
          <div class="space-y-3">
            <div> <b class="text-white">Surabaya Barat</b><br> Kawasan Darmo Satelit Town<br> <a
                href="https://www.google.co.id/maps/place/CREATIVE+MEDIA/@-7.2669526,112.6834363,17z/data=!4m7!1m4!3m3!1s0x2dd7fe9e83ac2c61:0xca8274bb2ee06d06!2sCREATIVE+MEDIA!3b1!3m1!1s0x2dd7fe9e83ac2c61:0xca8274bb2ee06d06?hl=en"
                target="_blank" class="hover:text-white transition"> Jl. Tubanan Baru 10 Blok K - 15 Surabaya 60188,
                Jawa Timur - Indonesia </a> </div>
            <div> <b class="text-white">Surabaya Timur</b><br> <a
                href="https://www.google.co.id/maps/dir/-7.3023892,112.7698286/KCP+Creative+Media,+10,+Jl.+Nginden+Intan+Timur+XVIII+Blok+A3+No.16,+Ngenden+Jangkungan,+Sukolilo,+Surabaya+City,+East+Java+60118/@-7.3023892,112.6997908,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2dd7fa5691112989:0xfa01325a6e99771!2m2!1d112.7698314!2d-7.3023946"
                target="_blank" class="hover:text-white transition"> Jl. Nginden Intan Timur 18/A3-10 Surabaya 60118,
                Jawa Timur - Indonesia </a> </div>
            <div> <b class="text-white">Kota Tuban</b><br> <a
                href="https://www.google.com/maps/place/CREATIVE+MEDIA+CAB.+TUBAN/@-6.9352943,112.0558612,17z/data=!3m1!4b1!4m5!3m4!1s0x2e77bd9362c1a49f:0x559882c9300a63ad!8m2!3d-6.9352943!4d112.0580499?hl=id"
                target="_blank" class="hover:text-white transition"> Graha Ronggolawe Blok H-6, Jl. Raya Bektiharjo,
                Semanding - Tuban, Jawa Timur - Indonesia </a> </div>
          </div>
        </div>

        {{-- Mail --}}
        <div class="text-sm">
          <div class="flex items-center mb-3">
            <svg class="w-6 h-6 mr-2 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
            <h3 class="font-semibold text-white uppercase tracking-wider">Email Kami</h3>
          </div>
          <div class="space-y-3">
            <div> <b class="text-white">Customer Care</b><br> <a href="mailto:care@creativemedia.id"
                class="hover:text-white transition">care@creativemedia.id</a> </div>
            <div> <b class="text-white">Human Resource Development</b><br> <a href="mailto:hrd@creativemedia.id"
                class="hover:text-white transition">hrd@creativemedia.id</a> </div>
            <div> <b class="text-white">Surabaya Timur</b><br> <a href="mailto:nginden@creativemedia.id"
                class="hover:text-white transition">nginden@creativemedia.id</a> </div>
            <div> <b class="text-white">Kota Tuban</b><br> <a href="mailto:tuban@creativemedia.id"
                class="hover:text-white transition">tuban@creativemedia.id</a> </div>
          </div>
        </div>

        {{-- Kontak --}}
        <div class="text-sm">
          <div class="flex items-center mb-3">
            <svg class="w-6 h-6 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
            </svg>
            <h3 class="font-semibold text-white dark:text-gray-200 uppercase tracking-wider">Hubungi Kami</h3>
          </div>
          <div class="space-y-3">
            {{-- Surabaya Barat --}}
            <div>
              <b class="text-white dark:text-gray-200">Surabaya Barat</b><br>
              <a href="tel:0317328540" class="flex items-center hover:text-white dark:hover:text-gray-100 transition">
                <svg class="w-4 h-4 mr-1.5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                </svg>
                <span>031 7328 540</span>
              </a>
              <a href="tel:082131314040" class="flex items-center hover:text-white dark:hover:text-gray-100 transition">
                <svg class="w-4 h-4 mr-1.5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                </svg>
                <span>0821 3131 4040 (Ayu)</span>
              </a>
              <a href="tel:082245024842" class="flex items-center hover:text-white dark:hover:text-gray-100 transition">
                <svg class="w-4 h-4 mr-1.5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                </svg>
                <span>0822 4502 4842 (Audi)</span>
              </a>
            </div>
            {{-- Surabaya Timur --}}
            <div>
              <b class="text-white dark:text-gray-200">Surabaya Timur</b><br>
              <a href="tel:03159173739" class="flex items-center hover:text-white dark:hover:text-gray-100 transition">
                <svg class="w-4 h-4 mr-1.5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                </svg>
                <span>031-5917 3739</span>
              </a>
              <a href="tel:082131310210" class="flex items-center hover:text-white dark:hover:text-gray-100 transition">
                <svg class="w-4 h-4 mr-1.5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                </svg>
                <span>0821 3131 0210 (Ulfa)</span>
              </a>
              <a href="tel:085370001721" class="flex items-center hover:text-white dark:hover:text-gray-100 transition">
                <svg class="w-4 h-4 mr-1.5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                </svg>
                <span>0853 7000 1721 (Amie)</span>
              </a>
            </div>
            {{-- Kota Tuban --}}
            <div>
              <b class="text-white dark:text-gray-200">Kota Tuban</b><br>
              <a href="tel:03568830746" class="flex items-center hover:text-white dark:hover:text-gray-100 transition">
                <svg class="w-4 h-4 mr-1.5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                </svg>
                <span>(0356) 8830 746</span>
              </a>
              <a href="tel:085736477705" class="flex items-center hover:text-white dark:hover:text-gray-100 transition">
                <svg class="w-4 h-4 mr-1.5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                </svg>
                <span>0857 3647 7705 (Putri)</span>
              </a>
            </div>
          </div>
        </div>

        {{-- Sosial Media --}}
        <div class="text-sm">
          <h3 class="font-semibold text-white uppercase tracking-wider mb-3">Ikuti Kami</h3>
          <div class="flex space-x-4 mb-6">
            <a href="http://www.facebook.com/wecreativemedia" target="_blank"
              class="text-gray-400 hover:text-white transition">
              <span class="sr-only">Facebook</span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            <a href="http://www.twitter.com/wecreativemedia" target="_blank"
              class="text-gray-400 hover:text-white transition">
              <span class="sr-only">X (Twitter)</span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
              </svg>
            </a>
            <a href="https://www.tiktok.com/@creativemedia.id" target="_blank"
              class="text-gray-400 hover:text-white transition">
              <span class="sr-only">TikTok</span>
              <img src="{{ asset('storage/tiktok.svg') }}" alt="TikTok" class="w-6 h-6">
            </a>
            <a href="http://www.youtube.com/wecreativemedia" target="_blank"
              class="text-gray-400 hover:text-white transition">
              <span class="sr-only">YouTube</span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.78 22 12 22 12s0 3.22-.418 4.814a2.504 2.504 0 0 1-1.768 1.768C18.219 19 12 19 12 19s-6.219 0-7.812-.418A2.504 2.504 0 0 1 2.418 16.814C2 15.22 2 12 2 12s0-3.22.418-4.814a2.504 2.504 0 0 1 1.768-1.768C5.781 5 12 5 12 5s6.219 0 7.812.418ZM9.75 15.562l4.5-3.563-4.5-3.562v7.125Z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            <a href="https://www.instagram.com/creativemedia_id/" target="_blank"
              class="text-gray-400 hover:text-white transition">
              <span class="sr-only">Instagram</span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.013-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2zm-6.57 1.444c-.889.043-1.448.2-1.811.346-.39.158-.718.36-1.016.658a3.402 3.402 0 00-.658 1.016c-.146.363-.303.922-.346 1.811-.043 1.002-.055 1.32-.055 3.71s.012 2.708.055 3.71c.043.889.2 1.448.346 1.811.158.39.36.718.658 1.016a3.402 3.402 0 001.016.658c.363.146.922.303 1.811.346 1.002.043 1.32.055 3.71.055s2.708-.012 3.71-.055c.889-.043 1.448-.2 1.811-.346.39-.158.718-.36 1.016-.658a3.402 3.402 0 00.658-1.016c.146-.363.303.922.346-1.811.043-1.002.055-1.32.055-3.71s-.012-2.708-.055-3.71c-.043-.889-.2-1.448-.346-1.811a3.402 3.402 0 00-.658-1.016 3.402 3.402 0 00-1.016-.658c-.363-.146-.922-.303-1.811-.346-1.002-.043-1.32-.055-3.71-.055s-2.708.012-3.71.055zm6.57 2.182a6.16 6.16 0 100 12.32 6.16 6.16 0 000-12.32zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z"
                  clip-rule="evenodd" />
              </svg>
            </a>
          </div>

          <div class="text-gray-400">
            Copyright © 2014 - {{ date('Y') }} <br>
            <a href="http://www.creativemedia.id" target="_blank" rel="nofollow"
              class="font-semibold text-gray-300 hover:text-white transition">Creative Media Corp.</a><br>
            All Rights Reserved
          </div>

        </div>
      </div>
  </footer>

  <button x-show="showScrollToTop" @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-2"
    x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform translate-y-2"
    class="fixed bottom-6 right-6 p-3 rounded-full bg-orange-600 hover:bg-orange-700 text-white shadow-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition"
    aria-label="Kembali ke atas" style="display: none;">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
    </svg>
  </button>

  @stack('scripts')

</body>

</html>
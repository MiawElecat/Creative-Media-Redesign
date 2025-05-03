<nav x-data="{ open: false }" class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="shrink-0">
          {{-- Logo --}}
          <a href="{{ route('beranda') }}">
            <img class="h-10 w-auto" src="http://creativemedia.id/wp-content/uploads/2020/01/kecil6-1.png" alt="Creative Media Corp.">
          </a>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            {{-- Nav Links Desktop --}}
            <a href="{{ route('beranda') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('beranda') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('beranda') ? 'aria-current="page"' : '' }}>Beranda</a>
            <a href="{{ route('bidangstudi') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('bidangstudi') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('bidangstudi') ? 'aria-current="page"' : '' }}>Bidang Studi</a>
            <a href="{{ route('layanan') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('layanan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('layanan') ? 'aria-current="page"' : '' }}>Layanan Jasa</a>
            <a href="{{ route('karyasiswa') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('karyasiswa') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('karyasiswa') ? 'aria-current="page"' : '' }}>Karya Siswa</a>
            <a href="{{ route('testimoni') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('testimoni') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('testimoni') ? 'aria-current="page"' : '' }}>Testimoni</a>
            <a href="{{ route('artikel') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('artikel') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('artikel') ? 'aria-current="page"' : '' }}>Artikel</a>
            <a href="{{ route('kontak') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('kontak') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('kontak') ? 'aria-current="page"' : '' }}>Kontak</a>
          </div>
        </div>
      </div>

      {{-- Button Menu Mobile --}}
      <div class="-mr-2 flex md:hidden">
        <button @click="open = ! open" type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Buka menu utama</span>

          <svg :class="{'hidden': open, 'block': !open }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>

          <svg :class="{'block': open, 'hidden': !open }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div x-show="open" class="md:hidden" id="mobile-menu"
       x-transition:enter="transition ease-out duration-100 transform"
       x-transition:enter-start="opacity-0 scale-95"
       x-transition:enter-end="opacity-100 scale-100"
       x-transition:leave="transition ease-in duration-75 transform"
       x-transition:leave-start="opacity-100 scale-100"
       x-transition:leave-end="opacity-0 scale-95"
       @click.away="open = false">
    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
      <a href="{{ route('beranda') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('beranda') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('beranda') ? 'aria-current="page"' : '' }}>Beranda</a>
      <a href="{{ route('bidangstudi') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('bidangstudi') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('bidangstudi') ? 'aria-current="page"' : '' }}>Bidang Studi</a>
      <a href="{{ route('layanan') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('layanan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('layanan') ? 'aria-current="page"' : '' }}>Layanan Jasa</a>
      <a href="{{ route('karyasiswa') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('karyasiswa') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('karyasiswa') ? 'aria-current="page"' : '' }}>Karya Siswa</a>
      <a href="{{ route('testimoni') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('testimoni') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('testimoni') ? 'aria-current="page"' : '' }}>Testimoni</a>
      <a href="{{ route('artikel') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('artikel') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('artikel') ? 'aria-current="page"' : '' }}>Artikel</a>
      <a href="{{ route('kontak') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('kontak') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" {{ request()->routeIs('kontak') ? 'aria-current="page"' : '' }}>Kontak</a>
    </div>
  </div>
</nav>
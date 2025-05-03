<x-auth-split-layout :showLogin="$showLogin ?? true">

    {{-- Form Login --}}
    <x-slot name="loginForm">
        <h2 class="text-2xl font-bold text-center text-gray-700 dark:text-gray-200 mb-6">
            Admin Login
        </h2>

        {{-- Session Status --}}
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Email Address --}}
            <div>
                <x-input-label for="email" value="Email" class="dark:text-gray-300" />
                <x-text-input id="email"
                    class="block mt-1 w-full dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" type="email"
                    name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            {{-- Password --}}
            <div class="mt-4">
                <x-input-label for="password" value="Password" class="dark:text-gray-300" />
                <x-text-input id="password"
                    class="block mt-1 w-full dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" type="password"
                    name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            {{-- Remember Me --}}
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-orange-600 shadow-sm focus:ring-orange-500 dark:focus:ring-orange-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-6">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none"
                        href="{{ route('password.request') }}">
                        Lupa password?
                    </a>
                @endif

                <x-primary-button
                    class="ms-3 bg-orange-600 hover:bg-orange-700 focus:bg-orange-700 active:bg-orange-800 focus:ring-orange-500">
                    Login
                </x-primary-button>
            </div>

            {{-- Tombol Register --}}
            @if (Route::has('register'))
                <div class="text-center mt-6 pt-4 border-t dark:border-gray-600">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Belum punya akun admin?
                        <button type="button" @click="isLogin = false"
                            class="text-orange-600 hover:text-orange-800 dark:hover:text-orange-400 font-medium">
                            Daftar di sini
                        </button>
                    </p>
                </div>
            @endif
        </form>
    </x-slot>

    {{-- Form Register --}}
    <x-slot name="registerForm">
        <h2 class="text-2xl font-bold text-center text-gray-700 dark:text-gray-200 mb-6">
            Register Admin
        </h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Name --}}
            <div>
                <x-input-label for="name" value="Nama" class="dark:text-gray-300" />
                <x-text-input id="name"
                    class="block mt-1 w-full dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" type="text"
                    name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            {{-- Email Address --}}
            <div class="mt-4">
                <x-input-label for="register_email" value="Email" class="dark:text-gray-300" />
                <x-text-input id="register_email"
                    class="block mt-1 w-full dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" type="email"
                    name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            {{-- Password --}}
            <div class="mt-4">
                <x-input-label for="register_password" value="Password" class="dark:text-gray-300" />
                <x-text-input id="register_password"
                    class="block mt-1 w-full dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" type="password"
                    name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            {{-- Confirm Password --}}
            <div class="mt-4">
                <x-input-label for="password_confirmation" value="Konfirmasi Password" class="dark:text-gray-300" />
                <x-text-input id="password_confirmation"
                    class="block mt-1 w-full dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-6">
                {{-- Tombol Login --}}
                <button type="button" @click="isLogin = true"
                    class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none">
                    Sudah punya akun?
                </button>

                <x-primary-button
                    class="ms-4 bg-orange-600 hover:bg-orange-700 focus:bg-orange-700 active:bg-orange-800 focus:ring-orange-500">
                    Daftar
                </x-primary-button>
            </div>
        </form>
    </x-slot>

</x-auth-split-layout>
<x-guest-layout>
    <h1 class="text-2xl font-bold text-center mb-4">Selamat Datang di Toko Ucupp Gratis</h1>
    <p class="text-center text-gray-600 mb-6">Silakan login untuk melanjutkan</p>
    <img src="/logo_web.jpeg" alt="Logo" class="mx-auto w-20 mb-6">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password"
                name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

  <a href="{{ route('google.login') }}"
   class="flex items-center justify-center gap-2 
          w-full px-4 py-2 rounded-lg 
          bg-red-600 hover:bg-red-700 
          text-white font-semibold 
          shadow-md hover:shadow-lg 
          transition-all duration-300 mt-4">
    <img src="https://www.svgrepo.com/show/355037/google.svg" 
         alt="Google Logo" class="w-5 h-5 bg-white rounded-full p-0.5">
    Login with Google
</a>



    <!-- Tombol Google di luar form -->
    <div class="mt-4 flex items-center justify-center">
        <a href="{{ route('google.login') }}"
            class="w-full inline-flex justify-center items-center px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 488 512">
                <path fill="currentColor"
                    d="M488 261.8C488 403.3 391.1 504 248 504 ..."/>
            </svg>
            Login with Google
        </a>
    </div>
    
</x-guest-layout>

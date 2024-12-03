<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <div class="flex justify-center items-center mb-6">
                <a href="{{ route('inicio') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 12l9-9 9 9"></path>
                        <path d="M9 21V12H15V21"></path>
                    </svg>
                </a>
            </div>
            
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" class="text-lg font-semibold text-gray-700" />
                <x-input id="email" class="block mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div>
                <x-label for="password" value="{{ __('Password') }}" class="text-lg font-semibold text-gray-700" />
                <x-input id="password" class="block mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-between">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-500 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div>
                <x-button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 text-center first-line:rounded-lg transition duration-300 ease-in-out">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                Don't have an account? 
                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">
                    Register here
                </a>
            </p>
        </div>
    </x-authentication-card>
</x-guest-layout>

<x-guest-layout>
    <!-- Logo -->
    <div class="flex flex-col items-center mb-8">
        <h1 class="mt-4 text-3xl font-bold">fefangni</h1>
        <p class="mt-2 text-sm text-gray-600">{{__("Sign in to your account to continue")}}</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ airoute('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" class="text-gray-700 font-medium" />
            <x-input 
                id="email" 
                class="block mt-1 w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#E4284D] focus:border-[#E4284D] transition-colors" 
                type="email" 
                name="email" 
                :value="old('email')" 
                autocomplete="email" 
                required 
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />
            <x-input 
                id="password" 
                class="block mt-1 w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#E4284D] focus:border-[#E4284D] transition-colors"
                type="password"
                name="password"
                autocomplete="current-password"
                required 
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input 
                    id="remember_me" 
                    type="checkbox" 
                    class="rounded border-gray-300 text-[#E4284D] shadow-sm focus:ring-[#E4284D]" 
                    name="remember"
                >
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-6">
            @if (Route::has('password.request'))
                <a 
                    class="text-sm text-[#E4284D] hover:text-[#C81D3E] transition-colors" 
                    href="{{ airoute('password.request') }}"
                >
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-button 
                class="px-4 py-2 bg-[#E4284D] text-white rounded-lg hover:bg-[#C81D3E] focus:outline-none focus:ring-2 focus:ring-[#E4284D] focus:ring-offset-2 transition-colors"
            >
                {{ __('Log in') }}
            </x-button>
        </div>

        <!-- Social Login Divider -->
        <div class="relative mt-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">{{__("Or continue with")}}</span>
            </div>
        </div>

        <!-- Social Login Buttons -->
        <div class="grid grid-cols-2 gap-3 mt-6">
            <a href="#" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors">
                <span>Google</span>
            </a>
            <a href="#" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors">
                <span>Facebook</span>
            </a>
        </div>

        <!-- Sign Up Link -->
        <p class="mt-6 text-center text-sm text-gray-600">
            {{ __("Don't have an account?") }}
            <a href="{{ airoute( 'register' ) }}" class="text-[#E4284D] hover:text-[#C81D3E] transition-colors">{{__("Sign up")}}</a>
        </p>
    </form>
</x-guest-layout>
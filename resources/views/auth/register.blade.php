<x-guest-layout>
    <div style="text-align: center; font-size: 36px; font-weight: bold; color: #6a1b9a; margin-bottom: 20px;">HomeAid</div>

    <form method="POST" action="{{ route('register') }}" style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #ffebf5; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full bg-white border border-purple-300 rounded-md focus:border-purple-500 focus:ring focus:ring-purple-200" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full bg-white border border-purple-300 rounded-md focus:border-purple-500 focus:ring focus:ring-purple-200" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full bg-white border border-purple-300 rounded-md focus:border-purple-500 focus:ring focus:ring-purple-200" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full bg-white border border-purple-300 rounded-md focus:border-purple-500 focus:ring focus:ring-purple-200" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4" style="background-color: #6a1b9a; color: white;">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

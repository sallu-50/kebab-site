<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
            autofocus />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />

        <!-- Phone -->
        <x-input-label for="phone" :value="__('Phone')" class="mt-4" />
        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
            required />
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />

        <!-- Email -->
        <x-input-label for="email" :value="__('Email')" class="mt-4" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
            required />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        <!-- Password -->
        <x-input-label for="password" :value="__('Password')" class="mt-4" />
        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <!-- Confirm Password -->
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="mt-4" />
        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
            required />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900">Already
                registered?</a>
            <x-primary-button class="ml-4">{{ __('Register') }}</x-primary-button>
        </div>
    </form>
</x-guest-layout>

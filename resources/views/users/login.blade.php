<x-layout>
    <x-card class="mx-auto mt-4 max-w-lg p-10">
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">
                Login
            </h2>
            <p class="mb-4">Login to your account to post job listings</p>
        </header>

        <form action="/users/authenticate" method="POST">
            @csrf
            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="email">
                    Email
                </label>
                <input class="w-full rounded border border-gray-200 p-2" name="email" type="email"
                    value="{{ old('email') }}">

                @error('email')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="password">
                    Password
                </label>
                <input class="w-full rounded border border-gray-200 p-2" name="password" type="password"
                    value="{{ old('password') }}">

                @error('password')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="rounded bg-primary py-2 px-4 text-white hover:bg-background" type="submit">Sign
                    In</button>
            </div>

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a class="text-primary" href="/register">Register</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>

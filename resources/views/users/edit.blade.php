<x-layout>
    <x-card class="mx-auto mt-24 max-w-lg p-10">
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">
                Edit Profile
            </h2>
        </header>

        <form action="/users/profile/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="forename">First Name</label>
                <input class="w-full rounded border border-gray-200 p-2" name="forename" type="text"
                    value="{{ $user->forename }}" />

                @error('forename')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="surname">Surname</label>
                <input class="w-full rounded border border-gray-200 p-2" name="surname" type="text"
                    value="{{ $user->surname }}" />

                @error('surname')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="email">Email</label>
                <input class="w-full rounded border border-gray-200 p-2" name="email" type="email"
                    value="{{ $user->email }}" />

                @error('email')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="password">Password</label>
                <input class="w-full rounded border border-gray-200 p-2" name="password" type="password"
                    value="{{ old('password') }}" />

                @error('password')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="password_confirmation">
                    Confirm Password
                </label>
                <input class="w-full rounded border border-gray-200 p-2" name="password_confirmation" type="password"
                    value="{{ old('password_confirmation') }}">

                @error('password_confirmation')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="rounded bg-primary px-4 py-2 text-white hover:bg-background">Save Changes</button>
            </div>
        </form>
    </x-card>
</x-layout>

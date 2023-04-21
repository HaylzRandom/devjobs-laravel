<x-layout>
    <x-card class="mx-auto mt-24 max-w-lg p-10">
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">
                Edit Listing
            </h2>
            <p class="mb-4">Edit: {{ $user->title }}</p>
        </header>

        <form action="/users/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="company">Company Name</label>
                <input class="w-full rounded border border-gray-200 p-2" name="company" type="text"
                    value="{{ $user->company }}" />
            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="title">Job Title</label>
                <input class="w-full rounded border border-gray-200 p-2" name="title" type="text"
                    value="{{ $user->title }}" />
            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="location">Job Location</label>
                <input class="w-full rounded border border-gray-200 p-2" name="location" type="text"
                    value="{{ $user->location }}" />
            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="email">Contact Email</label>
                <input class="w-full rounded border border-gray-200 p-2" name="email" type="email"
                    value="{{ $user->email }}" />
            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="website">Website/Application URL</label>
                <input class="w-full rounded border border-gray-200 p-2" name="website" type="text"
                    value="{{ $user->website }}" />
            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="tags">Tags (Comma Separated)</label>
                <input class="w-full rounded border border-gray-200 p-2" name="tags" type="text"
                    value="{{ $user->tags }}" />
            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="logo">
                    Company Logo
                </label>
                <input class="w-full rounded border-gray-200 p-2" name="logo" type="file" />

                <img class="mb-6 mr-6 w-48"
                    src="{{ $user->logo ? asset('storage/' . $user->logo) : asset('/images/no-image.png') }}"
                    alt="" />

                @error('logo')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="tags">Job Description</label>
                <textarea class="w-full rounded border border-gray-200 p-2" name="description" rows="10">{{ $user->description }}</textarea>
            </div>

            <div class="mb-6">
                <button class="rounded bg-primary px-4 py-2 text-white hover:bg-background">Edit Job User</button>
            </div>
        </form>
    </x-card>
</x-layout>

<x-layout>
    <x-card class="max-w-lg p-10 mx-auto mt-24">
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">
                Edit Listing
            </h2>
            <p class="mb-4">Edit: {{ $listing->title }}</p>
        </header>

        <form action="/listings/{{ $listing->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="company">Company Name</label>
                <input class="w-full p-2 border border-gray-200 rounded" name="company" type="text"
                    value="{{ $listing->company }}" />
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="title">Job Title</label>
                <input class="w-full p-2 border border-gray-200 rounded" name="title" type="text"
                    value="{{ $listing->title }}" />
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="location">Job Location</label>
                <input class="w-full p-2 border border-gray-200 rounded" name="location" type="text"
                    value="{{ $listing->location }}" />
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="email">Contact Email</label>
                <input class="w-full p-2 border border-gray-200 rounded" name="email" type="email"
                    value="{{ $listing->email }}" />
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="website">Website/Application URL</label>
                <input class="w-full p-2 border border-gray-200 rounded" name="website" type="text"
                    value="{{ $listing->website }}" />
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="tags">Tags (Comma Separated)</label>
                <input class="w-full p-2 border border-gray-200 rounded" name="tags" type="text"
                    value="{{ $listing->tags }}" />
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="logo">
                    Company Logo
                </label>
                <input class="w-full p-2 border-gray-200 rounded" name="logo" type="file" />

                <img class="w-48 mb-6 mr-6"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                    alt="" />

                @error('logo')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="tags">Job Description</label>
                <textarea class="w-full p-2 border border-gray-200 rounded" name="description" rows="10">{{ $listing->description }}</textarea>
            </div>

            <div class="mb-6">
                <button class="px-4 py-2 text-white rounded bg-primary hover:bg-background">Edit Job Listing</button>
            </div>
        </form>
    </x-card>
</x-layout>

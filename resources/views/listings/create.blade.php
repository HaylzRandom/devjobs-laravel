<x-layout>
    <x-card class="max-w-lg p-10 mx-auto mt-24">
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">List a Job</h2>
            <p class="mb-4">Post a listing to find a developer!</p>
        </header>

        <form action="/listings" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="company">Company Name</label>
                <input class="w-full p-2 border border-gray-200 rounded" name="company" type="text"
                    value="{{ old('company') }}" />

                @error('company')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="title">Job Title</label>
                <input class="w-full p-2 border border-gray-200 rounded" name="title" type="text"
                    value="{{ old('title') }}" placeholder="Example: Senior Laravel Developer" />

                @error('title')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="location">Job Location</label>
                <input class="w-full p-2 border border-gray-200 rounded" name="location" type="text"
                    value="{{ old('location') }}" placeholder="Example: Remote, Boston MA, etc" />

                @error('location')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="email">Contact Email</label>
                <input class="w-full p-2 border border-gray-200 rounded" name="email" type="email"
                    value="{{ old('email') }}" />

                @error('email')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="website">Website/Application URL</label>
                <input class="w-full p-2 border border-gray-200 rounded" name="website" type="text"
                    value="{{ old('website') }}" />

                @error('website')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="tags">Tags (Comma Separated)</label>
                <input class="w-full p-2 border border-gray-200 rounded" name="tags" type="text"
                    value="{{ old('tags') }}" placeholder="Example: Laravel, Backend, Postgres, etc" />

                @error('tags')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="logo">
                    Company Logo
                </label>
                <input class="w-full p-2 border-gray-200 rounded" name="logo" type="file" />

                @error('logo')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block mb-2 text-lg" for="description">Job Description</label>
                <textarea class="w-full p-2 border border-gray-200 rounded" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc">{{ old('description') }}</textarea>

                @error('description')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="px-4 py-2 text-white rounded bg-primary hover:bg-background">Create Job Listing</button>
            </div>
        </form>
    </x-card>
</x-layout>

<x-layout>
    @include('partials._search')

    <a class="mx-4 mb-3 inline-block text-black hover:text-primary" href="/">
        <i class="fa-solid fa-arrow-left mr-2"></i> Back
    </a>

    <div class="mx-4">
        <x-card class="w-100 p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="mb-6 mr-6 w-48"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/icon-remove.svg') }}"
                    alt="" />

                <h3 class="mb-2 text-2xl">{{ $listing->title }}</h3>
                <div class="mb-4 text-xl font-bold">{{ $listing->company }}</div>
                <x-listing-tags :tagsCsv="$listing->tags" />
                <div class="my-6 text-lg">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="mb-6 w-full border border-gray-200"></div>
                <div>
                    <h3 class="mb-4 text-3xl font-bold">
                        Job Description
                    </h3>
                    <div class="max-w-screen-lg space-y-6 text-lg">
                        {{ $listing->description }}

                        <a class="mt-6 block rounded-xl bg-primary py-2 text-white hover:opacity-80"
                            href="mailto:{{ $listing->email }}"><i class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a class="block rounded-xl bg-background py-2 text-white hover:opacity-80"
                            href="{{ $listing->website }}" target="_blank"><i class="fa-solid fa-globe"></i> Visit
                            Website</a>
                    </div>
                </div>
            </div>
        </x-card>
        {{-- <x-card class="flex p-2 mt-4 space-x-6">
            <a href="/listings/{{ $listing->id }}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>

            <form action="/listings/{{ $listing->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
        </x-card> --}}
    </div>
</x-layout>

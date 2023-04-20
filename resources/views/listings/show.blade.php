<x-layout>
    @include('partials._search')

    <a class="inline-block mx-4 mb-3 text-black hover:text-primary" href="/">
        <i class="mr-2 fa-solid fa-arrow-left"></i> Back
    </a>

    <div class="mx-4">
        <x-card class="p-10 w-100">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mb-6 mr-6"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                    alt="" />

                <h3 class="mb-2 text-2xl">{{ $listing->title }}</h3>
                <div class="mb-4 text-xl font-bold">{{ $listing->company }}</div>
                <x-listing-tags :tagsCsv="$listing->tags" />
                <div class="my-6 text-lg">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="w-full mb-6 border border-gray-200"></div>
                <div>
                    <h3 class="mb-4 text-3xl font-bold">
                        Job Description
                    </h3>
                    <div class="max-w-screen-lg space-y-6 text-lg">
                        {{ $listing->description }}

                        <a class="block py-2 mt-6 text-white rounded-xl bg-primary hover:opacity-80"
                            href="mailto:{{ $listing->email }}"><i class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a class="block py-2 text-white rounded-xl bg-background hover:opacity-80"
                            href="{{ $listing->website }}" target="_blank"><i class="fa-solid fa-globe"></i> Visit
                            Website</a>
                    </div>
                </div>
            </div>
        </x-card>

    </div>
</x-layout>

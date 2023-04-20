@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-40 mr-6 rounded-2xl md:block"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
            alt="" />
        <div>
            <h3 class="text-2xl">
                <a class="underline-offset-4 hover:text-primary hover:underline"
                    href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="mb-4 text-xl font-bold">{{ $listing->company }}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="mt-4 text-lg">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>

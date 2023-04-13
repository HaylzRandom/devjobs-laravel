@props(['listing'])

<x-card>
    <div class="flex">
        <img class="mr-6 hidden w-40 rounded-2xl md:block"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/icon-remove.svg') }}"
            alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="mb-4 text-xl font-bold">{{ $listing->title }}</div>
            <ul class="flex">
                <li class="mr-2 flex items-center justify-center rounded-xl bg-primary px-3 py-2 text-xs text-white">
                    <a href="#">Laravel</a>
                </li>
                <li class="mr-2 flex items-center justify-center rounded-xl bg-primary px-3 py-1 text-xs text-white">
                    <a href="#">API</a>
                </li>
                <li class="mr-2 flex items-center justify-center rounded-xl bg-primary px-3 py-1 text-xs text-white">
                    <a href="#">Backend</a>
                </li>
                <li class="mr-2 flex items-center justify-center rounded-xl bg-primary px-3 py-1 text-xs text-white">
                    <a href="#">Vue</a>
                </li>
            </ul>
            <div class="mt-4 text-lg">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>

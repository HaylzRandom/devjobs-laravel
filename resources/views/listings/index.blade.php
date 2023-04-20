<x-layout>
    @include('partials._hero')
    @include('partials._search')

    <div class="gap-4 pt-1 mx-4 space-y-4 md:space-y-0 lg:grid lg:grid-cols-3">
        @unless (count($listings) == 0)
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        @else
            <p>No Listings Found</p>
        @endunless
    </div>

    <div class="p-4 mt-6">
        {{ $listings->links() }}
    </div>

</x-layout>

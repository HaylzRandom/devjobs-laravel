<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="my-6 text-3xl font-bold text-center uppercase">
                Manage Job Listings
            </h1>
        </header>
        {{-- TODO - Sort out mobile stylings for table --}}
        <table class="w-full rounded-sm table-auto">
            <tbody>
                @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <tr class="p-4 border-gray-300">
                            <td class="p-4 text-lg border-t border-b border-gray-300">
                                <a class="hover:text-primary" href="/listings/{{ $listing->id }}">
                                    {{ $listing->title }}
                                </a>
                            </td>
                            <td class="text-lg border-t border-b border-gray-300">
                                <a class="px-6 py-6 text-blue-400 w rounded-xl hover:text-primary"
                                    href="/listings/{{ $listing->id }}/edit"><i class="fa-solid fa-pen-to-square"></i>
                                    Edit</a>
                            </td>
                            <td class="text-lg border-t border-b border-gray-300">
                                <form method="POST" action="/listings/{{ $listing->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                                        Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-gray-300">
                        <td class="p-4 text-lg border-t border-b border-gray-300">
                            <p class="text-center">No Listings Found</p>
                        </td>
                    </tr>
                @endunless

            </tbody>
        </table>
    </x-card>
</x-layout>

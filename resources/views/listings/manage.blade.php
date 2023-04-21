<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="my-6 text-center text-3xl font-bold uppercase">
                Manage Job Listings
            </h1>
        </header>
        {{-- TODO - Sort out mobile stylings for table --}}
        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <tr class="border-gray-300 p-4">
                            <td class="border-t border-b border-gray-300 p-4 text-lg">
                                <a class="hover:text-primary" href="/listings/{{ $listing->id }}">
                                    {{ $listing->title }}
                                </a>
                            </td>
                            <td class="border-t border-b border-gray-300 text-lg">
                                <a class="w rounded-xl px-6 py-6 text-blue-400 hover:text-primary"
                                    href="/listings/{{ $listing->id }}/edit"><i class="fa-solid fa-pen-to-square"></i>
                                    Edit</a>
                            </td>
                            <td class="border-t border-b border-gray-300 text-lg">
                                <a class="text-red-500" href="#my-modal-2"><i class="fa-solid fa-trash"></i>
                                    Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-gray-300">
                        <td class="border-t border-b border-gray-300 p-4 text-lg">
                            <p class="text-center">No Listings Found</p>
                        </td>
                    </tr>
                @endunless

            </tbody>
        </table>
    </x-card>
    {{-- Modal for Deleting Listing --}}
    <div class="modal" id="my-modal-2">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Are you sure you want to delete {{ $listing->title }} listing?</h3>
            <p class="py-4">Once deleted it will not be able to be retrieved.</p>
            <div class="modal-action">
                <a class="btn-ghost btn" href="#">Cancel</a>
                <form method="POST" action="/listings/{{ $listing->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn-error btn">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

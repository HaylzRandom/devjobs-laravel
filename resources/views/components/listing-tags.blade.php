@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach ($tags as $tag)
        <li
            class="mr-2 flex items-center justify-center rounded-xl bg-primary px-3 py-2 text-xs text-white hover:bg-background">
            <a href="/?tag={{ $tag }}">{{ ucfirst($tag) }}</a>
        </li>
    @endforeach

</ul>

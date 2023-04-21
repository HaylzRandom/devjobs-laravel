<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dev Jobs</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')

</head>

<body class="mb-48 p-4">
    {{-- Navbar --}}
    <nav class="mb-6 flex items-center justify-between p-6">
        <a href="/">
            <span class="rounded-md bg-primary p-5 font-extrabold text-white md:text-3xl">Dev Jobs</span>
        </a>
        <ul
            class="flex flex-col items-start space-y-2 md:flex-row md:items-center md:space-x-6 md:space-y-0 md:text-lg">
            @auth
                <li>
                    <span class="text-sm font-bold uppercase md:text-lg">
                        Welcome {{ auth()->user()->forename . ' ' . auth()->user()->surname }}
                    </span>
                </li>
                <li>
                    <a class="hover:text-primary" href="/users/profile">
                        <i class="fa-solid fa-user"></i> Edit Profile
                    </a>
                </li>
                <li>
                    <a class="hover:text-primary" href="/listings/manage">
                        <i class="fa-solid fa-gear"></i> Manage Listings
                    </a>
                </li>
                <li>
                    <form class="inline" action="/logout" method="POST">
                        @csrf
                        <button class="hover:text-primary" type="submit">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a class="hover:text-primary" href="/register">
                        <i class="fa-solid fa-user-plus"></i> Register
                    </a>

                </li>
                <li>
                    <a class="hover:text-primary" href="/login">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                    </a>
                </li>
            @endauth
        </ul>
    </nav>

    {{-- Main --}}
    <main>
        {{-- VIEW OUTPUT --}}
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer
        class="fixed bottom-0 left-0 mt-24 flex h-24 w-full flex-col items-center justify-start bg-background p-4 font-bold text-white opacity-90 md:flex-row md:justify-center md:p-6">
        <p class="ml-2 pb-2">Copyright &copy; 2023, All Rights reserved</p>
        <a class="top-1/3 right-10 rounded-xl border-primary bg-white py-2 px-5 text-primary shadow-lg hover:bg-primary hover:text-white hover:shadow-[0_5px_5px_rgba(0,0,0,0.75)] md:absolute"
            href="/listings/create">Post Job</a>
    </footer>

    <x-flash-message />
</body>

</html>

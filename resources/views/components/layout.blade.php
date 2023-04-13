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
    @vite('resources/css/app.css')

</head>

<body class="mb-48 p-4">
    {{-- Navbar --}}
    <nav class="flex items-center justify-between p-5">
        <a href="/">
            <span class="rounded-md bg-primary p-5 text-3xl font-extrabold text-white">Dev Jobs</span>
        </a>
        <ul class="flex space-x-6 text-lg">
            <li>
                <a class="hover:text-primary" href="/register">
                    <i class="fa-solid fa-user-plus"></i> Register
                </a>
                <a class="hover:text-primary" href="/login">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                </a>
            </li>
        </ul>
    </nav>

    {{-- Main --}}
    <main>
        {{-- VIEW OUTPUT --}}
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer
        class="fixed bottom-0 left-0 mt-24 flex h-24 w-full items-center justify-start bg-background font-bold text-white opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>
        <a class="absolute top-1/3 right-10 rounded-xl border-primary bg-white py-2 px-5 text-primary shadow-lg hover:bg-primary hover:text-white hover:shadow-[0_5px_5px_rgba(0,0,0,0.75)]"
            href="/listings/create">Post Job</a>
    </footer>
</body>

</html>

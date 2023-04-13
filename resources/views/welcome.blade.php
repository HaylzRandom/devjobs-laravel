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

<body class="mb-48">
    {{-- Navbar --}}
    <nav class="flex items-center justify-between p-10">
        <a href="#">
            <span class="rounded-md bg-primary p-5 text-3xl font-extrabold text-white">Dev Jobs</span>
        </a>
        <ul class="mr-6 flex space-x-6 text-lg">
            <li>
                <a class="hover:text-primary" href="#">
                    <i class="fa-solid fa-user-plus"></i> Register
                </a>
                <a class="hover:text-primary" href="#">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                </a>
            </li>
        </ul>
    </nav>
    {{-- Hero Section --}}
    <section class="relative mb-4 flex h-60 flex-col items-center justify-center space-y-4 bg-background text-center">
        <div class="absolute top-0 left-0 h-full w-full bg-cover bg-center bg-no-repeat opacity-30"
            style="background-image: url('images/bg-header-desktop.svg')"></div>
        <div class="z-20 font-bold text-white">
            <h1 class="text-5xl drop-shadow-lg">Dev Jobs</h1>
            <p class="my-4 text-2xl">
                Find or post Dev Jobs
            </p>
            <div>
                <a class="mt-2 mb-4 inline-block rounded-xl border-2 border-white bg-white py-4 px-5 uppercase text-primary hover:text-background hover:shadow-[0_5px_5px_rgba(0,0,0,0.75)]"
                    href="">Sign Up to List a Job</a>
            </div>
        </div>
    </section>
    {{-- Main --}}
    <main>
        {{-- Search --}}
        <form action="">
            <div class="relative m-4 rounded-lg border-2 border-gray-100">
                <div class="absolute top-4 left-3">
                    <i class="fa fa-search z-20 text-primary hover:text-background"></i>
                </div>
                <input class="z-0 h-14 w-full rounded-lg pl-10 pr-20 focus:shadow" id="search" name="search"
                    type="text" autocomplete="off" placeholder="Search Dev Jobs...">
                <div class="absolute top-2 right-2">
                    <button class="h-10 w-20 rounded-lg bg-primary text-white hover:bg-background"
                        type="submit">Search</button>
                </div>
            </div>
        </form>

        <div class="mx-4 gap-4 space-y-4 pt-1 md:space-y-0 lg:grid lg:grid-cols-3">
            {{-- Item 1 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 2 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 3 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 4 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 5 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 6 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 6 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 6 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 6 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 6 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 6 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 6 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 6 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 6 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 6 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
            {{-- Item 6 --}}
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-40 rounded-2xl md:block" src="images/manage.svg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">Senior Laravel Developer</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">Acme Corp</div>
                        <ul class="flex">
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-2 px-3 text-xs text-white">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="mr-2 flex items-center justify-center rounded-xl bg-primary py-1 px-3 text-xs text-white">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    {{-- Footer --}}
    <footer
        class="fixed bottom-0 left-0 mt-24 flex h-24 w-full items-center justify-start bg-background font-bold text-white opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>
        <a class="absolute top-1/3 right-10 rounded-xl border-primary bg-white py-2 px-5 text-primary shadow-lg hover:bg-primary hover:text-white hover:shadow-[0_5px_5px_rgba(0,0,0,0.75)]"
            href="#">Post Job</a>
    </footer>
</body>

</html>

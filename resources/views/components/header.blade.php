<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://kit.fontawesome.com/c17f5ac32f.js" crossorigin="anonymous"></script>

</head>

<body class="bg-gray-100 font-light">

    <header class="bg-white shadow-lg">

        <div class="bigBox">
            <nav id="breakingNew" class="max-sm:border-0 bg-zinc-800 border-b flex w-full justify-between px-5 items-center">
                <div>
                    <div class="flex">
                        <span id="brekingNews" class="text-white flex justify-center items-center">
                            Gündem
                        </span>
                        <p class="text-xs text-white flex items-center pl-2">Lorem, ipsum dolor sit amet consectetur
                            adipisicing.
                        </p>
                    </div>

                </div>
                <div>
                    <ul class="flex gap-4">
                        <a href="https://www.instagram.com/sahvezirnet/" target="_blank">
                            <i class="fa-brands fa-instagram text-xl text-gray-600 text-sm "></i>
                        </a>
                        <a href="https://twitter.com/sahvezirnet" target="_blank">
                            <i class="fa-brands fa-twitter text-xl text-gray-600 text-sm "></i>
                        </a>
                        <a href="" target="_blank">
                            <i class="fa-brands fa-linkedin text-xl text-gray-600 text-sm "></i>
                        </a>
                    </ul>
                </div>
            </nav>
        </div>


        <div class="bigBox bg-white max-sm:bg-white">
            <div class="w-4/5 m-auto">
                <nav id="logoBox" class="flex items-center justify-between">
                    <div class="max-sm:m-auto">
                        <a href="/">
                            <img src="/images/logo.png" width="100" />
                        </a>
                    </div>
                    <div class="max-sm:hidden">
                        <img src="/images/1.jpg" width="600" />
                    </div>
                </nav>

            </div>
        </div>

        <!-- Navbar -->


        <div class="bigBox">
            <nav id="menuBox" class="flex justify-between menuBox border-t w-full bg-white max-sm:text-zinc-800 max-sm:bg-white">

                <div class="sm:hidden w-4/6 px-2 flex items-center pl-5 mobilBtn">
                    <i class="fa-solid fa-bars cursor-pointer"></i>
                </div>


                <div class="max-sm:hidden w-4/6 px-2 flex items-center">
                    <ul class="flex items-center">
                        <a href="/" class="text-gray-800">
                            @if (url()->current() == env('APP_URL'))
                                <li
                                    class="px-3 py-3 font-bold text-gray-800 cursor-pointer text-sm text-purple-600 flex items-center">
                                    <i class="fas fa-solid fa-house-chimney"></i>
                                </li>
                            @else
                                <li
                                    class="px-3 py-3 font-bold text-gray-800 cursor-pointer text-sm text-white flex items-center">
                                    <i class="fas fa-solid fa-house-chimney"></i>
                                </li>
                            @endif

                        </a>
                        @foreach (getAllCategory() as $category)
                            <a href="/kategori/{{ $category->slug }}">
                                <li
                                    class="<?php if (url()->current() === env('APP_URL') . '/kategori/' . $category->slug) {
                                        echo 'text-purple-600 ';
                                    } ?> px-3 py-3 font-bold text-gray-800 cursor-pointer text-sm hover:text-purple-600 flex items-center">
                                    {{ $category->name }}
                                </li>
                            </a>
                        @endforeach

                    </ul>
                </div>
                <div class="w-2/6">
                    <div class="flex h-full">
                        <div class="w-3/12 flex items-center justify-around ">
                            {{-- Gece Mod Alanı --}}
                            {{-- <i class="far fa-solid fa-moon text-sm text-gray-800 cursor-pointer" id="mod"></i> --}}
                            @auth
                                @if (Str::contains(auth()->user()->name, ' ') === true)
                                    <a href='/hesap'
                                        class="text-sm font-bold text-white border py-2 px-2 rounded-full border-blue-400 bg-blue-400 flex items-center ">
                                        @php
                                            $expName = explode(' ', auth()->user()->name);
                                        @endphp
                                        {{ Str::upper(Str::substr($expName[0], 0, 1)) . Str::upper(Str::substr($expName[1], 0, 1)) }}
                                    </a>
                                @else
                                    <a href='/hesap'
                                        class="text-sm font-bold text-white border py-2 px-3 rounded-full border-blue-400 bg-blue-400 flex items-center ">
                                        <span>

                                            {{ Str::upper(Str::substr(auth()->user()->name, 0, 1)) }}

                                        </span>
                                    </a>
                                @endif
                            @else
                                <a href="/login">
                                    <i class="fas fa fa-user text-sm text-gray-800 flex items-center"></i>
                                </a>
                            @endauth
                        </div>
                        <div class="w-9/12 border-l  border-l-gray-200">
                            <form action="{{ route('search') }}" method="get" class="h-full" id="search">

                                <div class="flex items-center h-full ">

                                    <input type="text" placeholder="Ara..." value="{{ request('search') }}"
                                        name="search" autocomplete="off"
                                        class="h-full w-10/12 px-3 outline-none  max-sm:bg-white text-gray-800 placeholder:text-blue-200">

                                    <button class="w-2/12 h-full">
                                        <i class="fas fa-regular fa-magnifying-glass text-blue-400"></i>
                                    </button>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </nav>

            <div class="max-sm:bg-white w-full h-80 bg-white sm:hidden max-sm:hidden mobilList">
                <ul>
                    @foreach (getAllCategory() as $category)
                        <a href="/kategori/{{ $category->slug }}">
                            <li
                                class="<?php if (url()->current() === env('APP_URL') . '/kategori/' . $category->slug) {
                                    echo 'text-purple-600 ';
                                } ?> px-3 py-3 font-bold  cursor-pointer text-sm hover:text-purple-600 flex items-center text-zinc-800">
                                {{ $category->name }}
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>

        </div>


    </header>

    <div class="bigBox mt-2">
        {{ $slot }}
    </div>

</body>

</html>

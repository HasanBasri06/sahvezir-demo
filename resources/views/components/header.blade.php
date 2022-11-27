<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')


    <script src="https://kit.fontawesome.com/c17f5ac32f.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100">

    <header class="bg-white shadow-lg">

        <div class="bigBox">
            <nav id="breakingNew" class="bg-white border-b flex w-full justify-between px-5 items-center">
                <div>
                    <div class="flex">
                        <span id="brekingNews" class="text-white flex justify-center items-center">
                            Gündem
                        </span>
                        <p class="text-xs flex items-center pl-2">Lorem, ipsum dolor sit amet consectetur adipisicing.
                        </p>
                    </div>

                </div>
                <div>
                    <ul class="flex">
                        <a href="https://www.instagram.com/sahvezirnet/" target="_blank">
                            <li class="px-3"><i class="fas fa-brands fa-instagram"></i></li>
                        </a>
                        <a href="https://twitter.com/sahvezirnet" target="_blank">
                            <li class="px-3"><i class="fas fa-brands fa-twitter"></i></li>
                        </a>
                        <a href="" target="_blank">
                            <li class="px-3"><i class="fas fa-brands fa-youtube"></i></li>
                        </a>
                    </ul>
                </div>
            </nav>
        </div>


        <div class="bigBox bg-white">
            <div class="w-4/5 m-auto">
                <nav id="logoBox" class="flex items-center justify-between">
                    <div>
                        <img src="/images/logo.png" width="100" />
                    </div>
                    <div>
                        <img src="/images/1.jpg" width="600" />
                    </div>
                </nav>

            </div>
        </div>

        <!-- Navbar -->


        <div class="bigBox">
            <nav id="menuBox" class="flex justify-between menuBox border-t w-full bg-white ">

                <div class="w-4/6 px-2 flex items-center">
                    <ul class="flex">
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
                        @if (auth()->check())
                            <li class="flex text-sm font-bold ml-4 items-center">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="text-sm text-red-500">Çıkış Yap</button>
                                </form>
                            </li>
                            
                        @endif

                    </ul>
                </div>
                <div class="w-2/6">
                    <div class="flex h-full">
                        <div class="w-3/12 flex items-center justify-around ">
                            <i class="far fa-solid fa-moon text-sm text-gray-800 cursor-pointer" id="mod"></i>
                            @auth
                                @if (Str::contains(auth()->user()->name, ' ') === true)
                                    <span
                                        class="text-sm font-bold text-white border py-2 px-2 rounded-full border-blue-400 bg-blue-400 flex items-center ">
                                        @php
                                            $expName = explode(' ', auth()->user()->name);
                                        @endphp
                                        {{ Str::upper(Str::substr($expName[0], 0, 1)) . Str::upper(Str::substr($expName[1], 0, 1)) }}
                                    </span>
                                @else
                                    <span
                                        class="text-sm font-bold text-white border py-1 px-2 rounded-full border-blue-400 bg-blue-400 flex items-center ">

                                        {{ Str::upper(Str::substr(auth()->user()->name, 0, 1)) }}

                                    </span>
                                @endif
                                
                            @else
                                <a href="/login">
                                    <i class="fas fa fa-user text-sm text-gray-800 flex items-center"></i>
                                </a>
                            @endauth
                        </div>
                        <div class="w-9/12 border-l border-l-gray-200">
                            <form action="{{ route('search') }}" method="get" class="h-full" id="search">

                                <div class="flex items-center h-full">

                                    <input type="text" placeholder="Ara..." value="{{ request('search') }}"
                                        name="search" autocomplete="off"
                                        class="h-full w-10/12 px-3 outline-none text-gray-800">

                                    <button class="w-2/12 h-full">
                                        <i class="fas fa-regular fa-magnifying-glass text-gray-800"></i>
                                    </button>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </nav>

        </div>


    </header>

    <div class="bigBox mt-2">
        {{ $slot }}
    </div>

</body>

</html>

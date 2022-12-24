<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Paneli</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://kit.fontawesome.com/c17f5ac32f.js" crossorigin="anonymous"></script>
    <title>Admin Paneli - @yield('title')</title>
</head>

<body >

    <nav class="w-full h-16 bg-zinc-900 text-white flex items-center px-14 justify-between">
        <div class="text-xl font-bold text-white">
            <a href="/sahvezir/main">
                <span class="text-blue-400">Admin</span>Paneli
            </a>
        </div>
        <div>
            <ul class="flex gap-4">
                <li>Şahvezir</li>
                <li>
                    <form action="/sahvezir/logout" method="post">
                        @csrf
                        <button>
                            Çıkış Yap
                        </button>
                    </form>
                </li>
                <li>Logo</li>
            </ul>
        </div>
    </nav>

    <div class="w-full flex overflow-hidden">
        <div class="w-1/6 h-auto h-screen bg-zinc-900">

            <div class="m-auto w-2/4 text-zinc-500 text-center mt-10 ">
                <span class="text-3xl">Şahvezir</span>
                <ul class="mt-5 flex flex-col space-y-4 text-lg text-start">
                    <li class="cursor-pointer">
                        <span id="postBtn" >
                            Gönderiler &nbsp;
                            <i class="fa-solid fa-caret-down"></i>
                        </span>
                        <div id="postSlideBox" class="hidden">
                            <ul class="text-sm flex flex-col space-y-3 mt-2 text-zinc-700 text-start">
                                <li>
                                    <a href="{{route('allNews')}}">
                                        Tüm Gönderiler
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('publishNews')}}">
                                        Gönderi Ekle
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('allContactForm')}}">
                            Forum
                        </a>
                    </li>
                    <li>Site Ayarları</li>
                </ul>

            </div>
        </div>
        <div class="w-5/6 px-6 py-6">
            <div class="w-full h-screen h-60 ">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>

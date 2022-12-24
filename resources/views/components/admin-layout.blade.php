<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <script src="https://kit.fontawesome.com/c17f5ac32f.js" crossorigin="anonymous"></script>

    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />

    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet"
        type="text/css" />

</head>

<body class="bg-gray-100 font-light">

    <nav class="w-full h-16 flex items-center bg-zinc-900 text-white justify-between px-10 absolute ">
        <div class="font-bold">
            <span class="text-blue-500">Admin</span>Paneli
        </div>
        <div class="space-x-10 flex items-center">
            @auth('admin')
                <span>
                    Şahvezir
                </span>
                <span>
                    <form action="/sahvezir/logout" method="post">
                        @csrf
                        <button>
                            <i class="fa-solid fa-power-off text-red-800" title="Çıkış Yap"></i>
                        </button>
                    </form>
                </span>
                <a href="">
                    <img src="/images/logo.png" alt="" width="40">
                </a>
            @else
                <a href="/">
                    <i class="fa-regular fa-hand-point-left"></i>
                    Web Sitesine Dön
                </a>
            @endauth
        </div>
    </nav>

    <div class="w-full bg-white m-auto py-2">

        {{ $slot }}

    </div>

</body>

</html>

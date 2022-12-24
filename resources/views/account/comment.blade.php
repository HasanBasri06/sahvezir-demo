<x-header>
    <div class="bigBox">
        <div class="flex gap-3 w-11/12 m-auto mt-5">
            <div class="w-1/5 flex justify-center bg-white h-[450px] rounded-xl">
                <ul class="mt-10 space-y-4">
                    <li class="text-xl font-bold text-blue-400 border-b border-blue-200 pb-2">Hesap Ayarları</li>
                    <li class="text-sm flex items-center gap-2 text-blue-500">
                        <a href="/hesap/yorumlar">
                            <i class="fas fa-comment"></i>
                            Yorumlarım
                        </a>
                    </li>
                    <li></li>
                    <li></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="flex gap-2 items-center text-red-500">
                                <i class="fa-solid fa-power-off text-sm"></i>
                                Çıkış Yap
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="w-4/5 bg-white px-10 py-10 ">
                <h3 class="text-xl font-bold">Yorum Ayarları</h3>

                <div class="py-8 px-2 mt-2">

                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-header>

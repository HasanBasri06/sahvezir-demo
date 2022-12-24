<x-header>
    <div class="bigBox">
        
        <div class="flex gap-3 w-11/12 m-auto mt-5">
            <div class="w-1/5 flex justify-center bg-white h-[450px]">
                <ul class="mt-10 space-y-8">
                    <li class="text-xl font-bold text-blue-400 border-b border-blue-200 pb-2">Hesap Ayarları</li>
                    <li class="text-sm flex gap-3 cursor-pointer hover:text-blue-500 hover:border-l hover:border-l-2 hover:border-blue-400 duration-150 hover:pl-4 hover:shadow-rS">
                        <a href="/hesap">
                            <i class="fa-solid fa-sliders"></i>
                        </a>
                        <span>Ayarlar</span>
                    </li>
                    <li class="text-sm flex gap-3 cursor-pointer hover:text-blue-500 hover:border-l hover:border-l-2 hover:border-blue-400 duration-150 hover:pl-4  hover:shadow-rS">
                        <a href="/hesap/yorumlar">
                            <i class="fas fa-comment"></i>
                        </a>
                        <span>Yorumlarım</span>
                    </li>
                    <li>
                        <form action="/logout" method="post" class="text-sm flex gap-3 items-center text-red-500">
                            @csrf
                            <i class="fa-solid fa-power-off text-sm"></i>
                            <button>
                                Çıkış Yap
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="w-4/5 bg-white px-10 py-10 ">
                <h3 class="text-xl font-bold">Hesap Ayarları</h3>

                <div class="py-8 px-2 mt-2">
                    <div class="grid grid-cols-4 mt-3">
                        <div class="col-span-1 mt-2">
                            <img src="/images/{{ auth()->user()->image }}" id='accountImg'
                                class="w-28 h-28 m-auto object-cover rounded-full" alt="">
                        </div>
                        <div class="col-span-3 flex flex-col justify-center gap-3">
                            <label class="text-sm">Profil Fotoğrafı</label>
                            <input type="file" name="profil" id="changeImg"
                                class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-1 file:px-2
                                file:border-0
                                file:text-sm file:font-semibold
                                file:bg-violet-50 file:text-blue-400
                                hover:file:bg-violet-100
                                cursor-pointer
                              ">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 mt-5 ">
                        <div class="px-5">
                            <h3 class="text-lg">İsim</h3>
                            <input type="text" value="{{ auth()->user()->name }}"
                                class="border text-sm text-gray-500 py-2 px-3 mt-1 w-full">
                        </div>
                        <div class="px-5">
                            <h3 class="text-lg">Email</h3>
                            <input type="text" value="{{ auth()->user()->email }}"
                                class="border text-sm text-gray-500 py-2 px-3 mt-1 w-full">
                        </div>
                    </div>
                    <div class="mt-5 px-5">
                        <button type="submit" class="bg-sky-400 py-1 px-2 flex items-center gap-2 text-white">
                            Güncelle
                            <i class="fas fa-pencil text-xs"></i>
                        </button>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-header>

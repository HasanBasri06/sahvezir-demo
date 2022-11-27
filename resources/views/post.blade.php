@props(['post'])
<x-header>
    <div class="bigBox">
        <div class="flex px-16 shadow-2xl py-3 h-auto w-full mt-5 bg-white">
            <div class="w-9/12 pr-2">
                <h1 class="text-4xl font-bold mt-4">
                    {{ $post->title }}
                </h1>
                <h4 class="text-gray-500 text-sm mt-5">
                    <span>Şahvezir</span> -
                    <span>{{ $post->created_at->diffForHumans() }}</span>
                    <span class="bg-gray-300 p-1 rounded-xl px-2 text-gray-100 text-xs ml-3">2 dakikalık okuma</span>
                </h4>
                <div class="w-full h-auto mt-5">
                    <img src="/images/{{ $post->image }}" alt="" class="h-5Y w-full object-cover">
                    <div class="w-full mt-5">
                        {!! $post->body !!}
                    </div>
                </div>

                {{-- yorum alanaı --}}
                <div class="w-full mt-5">
                    <h3 class="text-xl text-blue-500">Yorumlar</h3>
                    @if (!auth()->check())
                        <span class="mt-2 text-xs text-gray-500">
                            Yorum yapabilmek için üye olmanız gerekir!
                            <a href="/register" class="font-bold">Buradan</a>
                            üye olabilirsiniz
                        </span>
                        <hr class="mt-2">
                        <br>
                        <label>İsim</label>
                        <div class="w-full border h-8 mt-3 flex items-center px-3 text-xs text-gray-500">
                            Şahvezir
                        </div>
                        <div class="flex flex-col mt-3">
                            <label>Mesaj</label>
                            <textarea readonly style="max-height: 150px;min-height:150px" name="mesaj"  class="border mt-2 p-3 outline-none" placeholder="Mesaj Yazabilmek için üye olmanız gerekir"></textarea>
                        </div>
                        <div class="mt-3">
                            <button class="bg-sky-600 text-white py-1 px-3 hover:bg-sky-700" style="cursor: not-allowed">Yayınla</button>
                        </div>
                    @else
                        <form action="#" method="post">
                            <div class="mt-3">İsim</div>
                            <div class="w-full border h-8 mt-3 flex items-center px-3 text-xs text-gray-500">
                                {{ auth()->user()->name }}
                            </div>
                            <div class="flex flex-col mt-3">
                                <label>Mesaj</label>
                                <textarea placeholder="Mesajınızı buraya giriniz..." style="max-height: 150px;min-height:150px" name="mesaj" class="border mt-2 p-3"></textarea>
                            </div>
                            <div class="mt-3">
                                <button class="bg-sky-600 text-white py-1 px-3 hover:bg-sky-700">Yayınla</button>
                            </div>
                        </form>
                    @endif

                </div>

            </div>
            <div class="w-3/12 pl-2">
                <div class="w-full h-[250px]">
                    <img src="/images/ads.jpeg" class="object-cover w-full h-full" alt="">
                </div>
                <div class="w-full mt-4 transition" id="panel1">
                    <x-right-panel></x-right-panel>
                </div>
            </div>
        </div>

    </div>
</x-header>

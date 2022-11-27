<x-header>
    <div class="bigBox">
        <div class="w-11/12 m-auto mt-3">

            <h3 class="text-sm text-gray-500 mt-8">
                <a href='/' style="color:dodgerblue;">
                    Home
                </a> / {{ Str::ucfirst($slug) }}
            </h3>


            @if (count($categoryList) < 1)
                <div class="w-full text-red-900 mt-5 text-xl font-bold">{{ Str::ucfirst($slug) }} İle İlgili Haber
                    Bulunamamıştır.</div>
            @else
                <h3 class="mt-5 font-bold text-2xl">{{ Str::ucfirst($slug) }} İlgili Haberler </h3>

                <div class="w-full  h-80 mt-3 grid grid-cols-4 grid-flow-col gap-4">
                    <div class="mt-8">
                        <img src="/images/images6.jpg" alt="" class="object-cover z-0 w-full">
                        <div class="body -mt-8 drop-shadow-xl p-5 bg-white w-11/12  z-10 relative">
                            <h4 class="text-xs text-gray-500">{{ $categoryList[0]->category->name }}</h4>
                            <h4 class="font-bold mt-2 text-gray-800 h-12">
                                @if (Str::length($categoryList[0]->title) > 40)
                                    {{ Str::substr($categoryList[0]->title, 0, 40) }} . . .
                                @else
                                    {{ $categoryList[0]->title }}
                                @endif
                            </h4>
                            <h4 class="text-xs text-gray-500 mt-2">0 yorum</h4>
                        </div>
                    </div>

                    <div class=" col-span-2">
                        <div class="body-content h-80 px-4 ">
                            <div class="bottom-8 absolute text-white ">
                                <h3 class="text-xs">{{ Str::ucfirst($slug) }}</h3>
                                <h3 class="text-3xl mt-2 font-bold">
                                    @if (Str::length($categoryList[1]->title) > 65)
                                        {{ Str::substr($categoryList[1]->title, 0, 65) }} . . .
                                    @else
                                        {{ $categoryList[1]->title }}
                                    @endif
                                </h3>
                            </div>
                        </div>
                        <img src="/images/images8.jpg" class="w-full relative top-0 body-rel object-cover h-80"
                            alt="">
                    </div>

                    <div class="mt-8">
                        <img src="/images/images7.jpg" alt="" class="object-cover z-0 w-full">
                        <div class="body -mt-8 drop-shadow-xl p-5 bg-white w-11/12  z-10 relative">
                            <h4 class="text-xs text-gray-500">{{ $categoryList[2]->category->name }}</h4>
                            <h4 class="font-bold mt-2 text-gray-800 h-12">
                                @if (Str::length($categoryList[2]->title) > 40)
                                    {{ Str::substr($categoryList[2]->title, 0, 45) }} . . .
                                @else
                                    {{ $categoryList[2]->title }}
                                @endif
                            </h4>
                            <h4 class="text-xs text-gray-500 mt-2">0 yorum</h4>
                        </div>
                    </div>
                </div>



            @endif


        </div>
        @if (count($categoryList) > 0)
            <div class="flex px-16 shadow-2xl py-3 h-auto w-full mt-5 bg-white">
                <div class="w-9/12 pr-2 min-h-screen">
                    <div>
                        <h3 class="font-bold text-xl text-blue-400">{{Str::ucfirst($slug)}} Haberleri</h3>

                        {{-- teknoloji haberleri kutusu --}}
                        @foreach ($categoryList->skip(3) as $post)
                            <x-post-card :post="$post"></x-post-card>
                        @endforeach

                        @if (count($categoryList->skip(3)) > 10)
                            <div class="mt-7 w-full flex items-center gap-4">
                                <i
                                    class="fas fa-solid fa-caret-left cursor-pointer py-1 px-1 text-xl cursor-pointer"></i>
                                @for ($i = 1; $i <= 3; $i++)
                                    @php
                                        $active = $i == 1 ? 'bg-blue-400 text-white' : null;
                                    @endphp
                                    <span class="{{ $active }} px-2  cursor-pointer">{{ $i }}</span>
                                @endfor
                                <i
                                    class="fas fa-solid fa-caret-right cursor-pointer py-1 px-1 text-xl cursor-pointer"></i>
                            </div>
                        @endif

                        <div class="mt-7 ">
                            {{ $categoryList->links() }}
                        </div>

                        {{-- teknoloji haberleri kutusu bitiş --}}

                        <div>

                        </div>

                    </div>
                </div>
                <div class="w-3/12 pl-2">
                    <div class="w-full mt-4 h-24 transition" id="panel1">
                        <x-right-panel></x-right-panel>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <!-- büyük görünüm bitiş -->
    <x-footer></x-footer>

</x-header>

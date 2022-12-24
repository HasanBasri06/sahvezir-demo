<x-header>
    <div class="bigBox">

        {{-- uyarı alanı --}}
        @error('logout')
            <div id="alert" class="fixed right-2 bottom-2 px-16 py-2 z-[999] opacity-80 text-white" x-data="{ show: true }"
                x-show="show" x-init="setTimeout(() => show = false, 5000)">
                {{ $message }}
            </div>
        @enderror

        <!-- slider -->
        <div class="w-11/12 m-auto  mt-3">

            <div class="max-sm:flex-col max-sm:h-auto flex h-96 gap-4">


                <div class="max-sm:w-full max-sm:h-72 w-1/4 h-full bg-pink-700">
                    <img src="/images/post/images7.jpg" class="w-full h-full object-cover relative" alt="">
                    <div class="max-sm:-mt-72 w-full h-full -mt-96  bg-gradient-to-t from-zinc-900 to-transparent relative">
                        <div class="font-bold relative flex flex-col justify-end h-full pb-10 uppercase px-2">
                            <h1 class="text-white w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Tempora dolore saepe id.</h1>
                            <span class="flex gap-4 text-white text-sm mt-1 font-normal">
                                <h3>Şahvezir</h3>
                                <span class="flex gap-2">
                                    <h3><i class="fas fa-comment"></i></h3>
                                    0
                                </span>
                            </span>
                        </div>
                    </div>
                </div>


                <div class="max-sm:w-full max-sm:h-72 w-2/4 h-full">
                    <img src="/images/post/images7.jpg" class="w-full h-full object-cover relative  alt="">
                    <div class="max-sm:-mt-72 w-full h-full -mt-96  bg-gradient-to-t from-zinc-900 to-transparent relative">
                        <div class="max-sm:h-72 font-bold relative flex flex-col justify-end h-full pb-10 uppercase px-2">
                            <h1 class="max-sm:text-base text-white text-2xl w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Tempora dolore saepe id.</h1>
                            <span class="flex gap-4 text-white text-sm mt-1 font-normal">
                                <h3>Şahvezir</h3>
                                <span class="flex gap-2">
                                    <h3><i class="fas fa-comment"></i></h3>
                                    0
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="max-sm:flex-row max-sm:w-full flex flex-col w-1/4 gap-4">
                    <div class="max-sm:h-52 h-2/4">
                        <img src="/images/post/images7.jpg" class="h-full object-cover relative" alt="">
                        <div class="max-sm:h-52 max-sm:-mt-[208px] w-full h-full -mt-[184px] bg-gradient-to-t from-zinc-900 to-transparent relative">
                            <div class="max-sm:h-52 font-bold relative flex flex-col justify-end h-full pb-4 uppercase px-2">
                                <h1 class="text-white text-sm w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Tempora dolore saepe id.</h1>
                                <span class="flex gap-4 text-white text-xs mt-1 font-normal">
                                    <h3>Şahvezir</h3>
                                    <span class="flex gap-2">
                                        <h3><i class="fas fa-comment"></i></h3>
                                        0
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="max-sm:h-52 h-2/4 bg-gray-400">
                        <img src="/images/post/images7.jpg" class="h-full object-cover relative" alt="">
                        <div class="max-sm:h-52 max-sm:-mt-[208px] w-full h-full -mt-[184px]  bg-gradient-to-t from-zinc-900 to-transparent relative">
                            <div class="font-bold relative flex flex-col justify-end h-full pb-4 uppercase px-2">
                                <h1 class="text-white text-sm w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Tempora dolore saepe id.</h1>
                                <span class="flex gap-4 text-white text-xs mt-1 font-normal">
                                    <h3>Şahvezir</h3>
                                    <span class="flex gap-2">
                                        <h3><i class="fas fa-comment"></i></h3>
                                        0
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- slider finish --}}

        <div class="max-sm:px-8 max-sm:flex-col flex px-16 shadow-2xl py-3 h-auto w-full mt-5 bg-white">
            <div class="max-sm:w-full w-9/12 pr-2">
                <div id="texContent">
                    <h3 class="font-bold text-xl text-blue-400">Teknoloji Haberleri</h3>

                    {{-- teknoloji haberleri kutusu --}}

                    @foreach ($tecPosts->take(7) as $post)
                        <x-post-card :post="$post"></x-post-card>
                    @endforeach

                    <div class="mt-7 w-full">
                        {{ $tecPosts->links() }}
                    </div>


                    {{-- teknoloji haberleri kutusu bitiş --}}

                    <div>

                    </div>

                </div>
                <div class="w-full mt-7">
                    <div class="max-sm:flex-col flex gap-3">
                        <x-card-post type="success" :posts="$gamePosts->take(4)"></x-card-post>
                        <x-card-post type="info" :posts="$socialMediaPosts->take(4)"></x-card-post>
                    </div>
                </div>
            </div>
            <div class="w-3/12 max-sm:w-full pl-2 max-sm:mt-10">
                <div class="max-sm:h-auto max-sm:w-2/4 max-sm:m-auto w-full h-[250px]">
                    <img src="/images/ads.jpeg" class="object-cover w-full h-full" alt="">
                </div>
                <div class="max-sm:mt-5 w-full mt-4 transition" id="panel1">
                    <x-right-panel :post="$gundemPosts"></x-right-panel>
                </div>
            </div>
        </div>


    </div>


    <!-- büyük görünüm bitiş -->
    </div>

    <x-footer></x-footer>





</x-header>

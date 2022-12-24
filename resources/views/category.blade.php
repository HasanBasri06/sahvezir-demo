<x-header>
    <div class="bigBox">

        <div class="flex w-11/12 m-auto mt-5">
            <div class="max-sm:flex-col max-sm:h-auto flex h-80 justify-between gap-8">
                <div class="max-sm:w-full h-full w-2/4 mt-6">
                    <img src="/images/post/images7.jpg" class="max-sm:h-60 max-sm:-mt-7 h-44 z-10 w-full object-cover" alt="">
                    <div
                        class="max-sm:w-full w-11/12 h-32 bg-white shadow-lg -mt-8 z-20 relative py-1 px-3 flex flex-col justify-around">
                        <h3 class="mt-1 text-xs text-gray-600">{{ $lastTreePost[0]->category->name }}</h3>
                        <h4 class="text-sm mt-1 text-gray-800">{{ $lastTreePost[0]->title }}</h4>
                        <span class="flex items-center mt-1 text-xs gap-5 text-gray-600">
                            <span>
                                <i class="fas fa-comment"></i> {{ $lastTreePost[0]->comment->count() }}
                            </span>
                            Şahvezir
                        </span>
                    </div>
                </div>

                <div class="max-sm:w-full h-full w-3/4 font-bold">

                    <img src="/images/post/images7.jpg" class="w-full h-full object-cover" alt="">
                    <div
                        class="flex flex-col justify-end py-7 px-5 text-white bottom-10 w-full h-full relative -top-full  bg-gradient-to-t from-zinc-900 hover:from-zinc-800">
                        <h2 class="text-xs">{{ $lastTreePost[1]->category->name }}</h2>
                        <h3 class="text-xl font-bold uppercase">
                            {{ $lastTreePost[1]->title }}
                        </h3>
                        <span class="flex text-sm mt-2 gap-3 items-center">
                            <h4>
                                <i class="fas fa-comment"></i> 0
                            </h4>
                            <h4>
                                <i class="fas fa-user"></i> &nbsp; Şahvezir
                            </h4>
                        </span>
                    </div>

                </div>

                <div class="max-sm:w-full h-full w-2/4 mt-6">
                    <img src="/images/post/image2.png" class="max-sm:h-60 max-sm:-mt-7 h-44  z-10 w-full object-cover" alt="">
                    <div
                        class="max-sm:w-full w-11/12 h-32 bg-white shadow-lg -mt-8 z-20 relative py-1 px-3 flex flex-col justify-around">
                        <h3 class="mt-1 text-xs text-gray-600"> {{ $lastTreePost[2]->category->name }}</h3>
                        <h4 class="text-sm mt-1 text-gray-800">{{ $lastTreePost[2]->title }}</h4>
                        <span class="flex items-center mt-1 text-xs gap-5 text-gray-600">
                            <span>
                                <i class="fas fa-comment"></i> {{ $lastTreePost[2]->comment->count() }}
                            </span>
                            Şahvezir
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="bigBox bg-white mt-5">
        <div class="w-11/12 m-auto flex mt-3">
            <div class="w-3/4">
                @foreach ($categoryList as $item)
                    <x-post-card :post="$item"></x-post-card>
                @endforeach
                <div class="mt-5">
                    {{ $categoryList->links() }}
                </div>
            </div>
            <div class="w-1/4">
                <x-right-panel :post="$gundemPosts"></x-right-panel>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

</x-header>

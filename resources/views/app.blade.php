<x-header>
    <div class="bigBox">
        <!-- slider -->
        <div class="w-11/12 m-auto  mt-3">
            <div class="flex h-96">
                <div class="w-2/4 p-1 hvr">
                    <div class="darkTheme cursor-pointer">
                        <h3 class="darkThemeTitleWeight mx-4 text-3xl font-bold  text-white">
                            @if (Str::length($posts[0]->title) > 65)
                                {{ Str::substr($posts[0]->title, 0, 65) }} . . .
                            @else
                                {{ $posts[0]->title }}
                            @endif
                        </h3>
                        <div class="darkThemeDetailWeight text-xs font-bold text-gray-400 flex justify-between mx-4">
                            <span>
                                <i class="fas fa-regular fa-circle-user"></i> Hasan Basri
                                &nbsp;
                                <i class="fas fa-regular fa-calendar-days"></i>
                                {{ $posts[0]->created_at->diffForHumans() }}
                            </span>
                            <span>
                                <i class="fas fa-regular fa-comment"></i> 14
                                &nbsp;
                                <i class="fas fa-regular fa-fire"></i> {{ $posts[0]->hits }}
                            </span>
                        </div>
                    </div>
                    <img src="/images/{{ $posts[0]->image }}" class="h-full darkThemeAbs object-cover" alt="">
                </div>
                <div class="w-1/4 p-1 hvr">
                    <div class="darkTheme cursor-pointer">
                        <h3 class="darkThemeTitleSlim mx-4 text-xl font-bold text-white">
                            @if (Str::length($posts[1]->title) > 45)
                                {{ Str::substr($posts[1]->title, 0, 45) }} . . .
                            @else
                                {{ $posts[1]->title }}
                            @endif
                        </h3>
                        <div class="darkThemeDetailSlim text-xs font-bold text-gray-400 flex justify-between mx-4">
                            <span>
                                <i class="fas fa-regular fa-circle-user"></i> Deneme Basri
                                &nbsp;
                                <i class="fas fa-regular fa-calendar-days"></i>
                                {{ $posts[1]->created_at->diffForHumans() }}
                            </span>
                            <span>
                                <i class="fas fa-regular fa-comment"></i> 14
                                &nbsp;
                                <i class="fas fa-regular fa-fire"></i> {{ $posts[1]->hits }}
                            </span>
                        </div>
                    </div>
                    <img src="/images/{{ $posts[1]->image }}" class="h-full darkThemeAbs object-cover" alt="">
                </div>
                <div class="w-1/4">
                    <div class="hvr h-1/2 p-1">
                        <div class="darkTheme cursor-pointer">
                            <h3 class="darkThemeTitleMiddle mx-4 text-xm font-bold text-white">
                                @if (Str::length($posts[2]->title) > 50)
                                    {{ Str::substr($posts[2]->title, 0, 50) }} . . .
                                @else
                                    {{ $posts[2]->title }}
                                @endif
                            </h3>
                            <div
                                class="darkThemeDetailMiddle text-xs font-bold text-gray-400 flex justify-between mx-4">
                                <span>
                                    <i class="fas fa-regular fa-circle-user"></i> Hasan Basri
                                    &nbsp;
                                    <i class="fas fa-regular fa-calendar-days"></i>
                                    {{ $posts[2]->created_at->diffForHumans() }}
                                </span>
                                <span>
                                    <i class="fas fa-regular fa-comment"></i> 14
                                    &nbsp;
                                    <i class="fas fa-regular fa-fire"></i> {{ $posts[2]->hits }}
                                </span>
                            </div>
                        </div>
                        <img src="/images/{{ $posts[2]->image }}" class="h-full darkThemeAbs object-cover"
                            alt="">
                    </div>
                    <div class="hvr h-1/2 p-1">
                        <div class="darkTheme cursor-pointer">
                            <h3 class="darkThemeTitleMiddle mx-4 text-xm text-ellipsis font-bold text-white">
                                @if (Str::length($posts[3]->title) > 50)
                                    {{ Str::substr($posts[3]->title, 0, 50) }} . . .
                                @else
                                    {{ $posts[3]->title }}
                                @endif
                            </h3>
                            <div
                                class="darkThemeDetailMiddle text-xs font-bold text-gray-400 flex justify-between mx-4">
                                <span>
                                    <i class="fas fa-regular fa-circle-user"></i> Hasan Basri
                                    &nbsp;
                                    <i class="fas fa-regular fa-calendar-days"></i>
                                    {{ $posts[3]->created_at->diffForHumans() }}
                                </span>
                                <span>
                                    <i class="fas fa-regular fa-comment"></i> 14
                                    &nbsp;
                                    <i class="fas fa-regular fa-fire"></i> {{ $posts[3]->hits }}
                                </span>
                            </div>
                        </div>
                        <img src="/images/{{ $posts[3]->image }}" class="h-full darkThemeAbs object-cover"
                            alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex px-16 shadow-2xl py-3 h-auto w-full mt-5 bg-white">
            <div class="w-9/12 pr-2">
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
                    <div class="flex gap-3">
                        <x-card-post type="success" :posts="$gamePosts->take(4)"></x-card-post>
                        <x-card-post type="info" :posts="$socialMediaPosts->take(4)"></x-card-post>
                    </div>
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


    <!-- büyük görünüm bitiş -->
    </div>

    <x-footer></x-footer>


</x-header>

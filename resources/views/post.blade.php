@props(['post'])
<x-header>
    <div class="bigBox">
        <div class="max-sm:flex-col max-sm:px-8 flex px-16 shadow-2xl py-3 h-auto w-full mt-5 bg-white">
            <div class="max-sm:w-full w-9/12 px-5">
                <h1 class="text-4xl font-bold mt-4">
                    {{ $post->title }}
                </h1>
                <h4 class="text-gray-500 text-sm mt-5">
                    <span>Şahvezir</span> -
                    <span>{{ $post->created_at->diffForHumans() }}</span>
                    <span class="bg-gray-300 p-1 rounded-xl px-2 text-gray-100 text-xs ml-3">2 dakikalık okuma</span>
                </h4>
                <div class="w-full h-auto mt-5">
                    <img src="/images/post/{{ $post->image }}" alt="" class="h-[450px] w-full object-cover">
                    <div class="w-full mt-5 leading-loose">
                        {!! $post->body !!}
                    </div>
                    <div class="w-full mt-3 text-sm">
                        <span class="text-gray-800 font-bold">Kaynakca : </span>
                        <span class="ml-1 font-bold text-gray-500">
                            <a href="https://www.google.com/" target="_blank">
                                sihftdelete.com/teknoloji/lorem-ipsum-dolar-set
                            </a>
                        </span>
                    </div>
                </div>

                {{-- yorum alanaı --}}
                <div class="w-full mt-7">
                    <h3 class="text-xl text-blue-500 font-bold">Yorumlar ({{ count($post->comment) }})</h3>
                    <form action="/posts/{{ $post->slug }}/comment" method="post" @submit.prevent="">
                        @csrf
                        <div class="flex">
                            <div class="w-1/6 mt-3 flex">
                                <div class="w-24 h-24 bg-white border rounded-full overflow-hidden">
                                    <img src="/images/user.png" class="w-full h-full object-cover" alt="">
                                </div>
                            </div>
                            <div class="w-5/6 bg-red-500 h-24 mt-4">
                                <textarea name="comment" class="w-full h-full border p-3 max-h-24 min-h-full" placeholder="Lütfen yorumunuzu giriniz..."
                                    cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        @error('comment')
                            <span class="text-sm mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex mt-5 justify-between ">
                            <span class="text-sm w-[400px] text-gray-400">
                                Yorumunuz maksimum 255 karakter olabilir. <br>
                                @if (!auth()->check())
                                    Yorum yapabilmek için üye olmanız gerekmektedir
                                @endif
                            </span>
                            @if (!auth()->check())
                                <div
                                    class="bg-blue-200 h-8 px-5 flex items-center text-white hover:bg-blue-300 cursor-not-allowed transition rounded-lg">
                                    Yorumu
                                    Yayınla</div>
                            @else
                                <button
                                    class="bg-blue-400 h-8 px-5 text-white hover:ring-1 hover:ring-blue-400 hover:ring-offset-2 hover:bg-blue-500 transition ">Yorumu
                                    Yayınla</button>
                            @endif
                        </div>
                    </form>
                    <hr class="mt-4">

                    @if (count($post->comment) < 1)
                        <div class="text-red-300 mt-2 w-full">Bu gönderiye hiç yorum <u>yapılmamış!</u></div>
                    @endif

                    @foreach ($post->comment as $comment)
                        <div class="mt-5 h-24 flex gap-2 max-sm:gap-5">
                            <div class="w-12 h-12 bg-white border rounded-full overflow-hidden">
                                <img src="/images/user.png" class="w-full h-full object-cover" alt="">
                            </div>
                            <div class="w-full px-2 h-24">
                                <div class="flex justify-between">
                                    <h3 class="text-gray-700 text-sm font-bold">{{ $comment->name }}</h3>
                                    
                                    @if (auth()->check() === 1 and auth()->user()->name === $comment->name)
                                        <span class="text-xs text-red-200 hover:text-red-700 cursor-pointer transition">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    @endif
                                </div>
                                <p class="text-sm text-gray-600 mt-1">
                                    {{ $comment->body }}
                                </p>
                                <span class="text-xs text-gray-500">
                                    {{ $comment->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            <div class="max-sm:w-full max-sm:mt-5 w-3/12 pl-2">
                <div class="max-sm:w-2/4 m-auto w-full h-[250px]">
                    <img src="/images/ads.jpeg" class="object-cover w-full h-full" alt="">
                </div>
                <div class="w-full mt-4 transition" id="panel1">
                    <x-right-panel :post="$gundemPosts"></x-right-panel>
                </div>
            </div>
        </div>

    </div>
</x-header>

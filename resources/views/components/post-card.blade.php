@props(['post'])
<a href='/post/{{ $post->slug }}'>

    <div class="w-full h-36 cursor-pointer bg-white group flex mt-5 transition">      
        <img src="/images/post/{{ $post->image }}" class="object-cover w-2/6" alt="">
        <div class="w-4/6 px-3 py-6 grid content-between">
            <h3 class="text-xs text-gray-500">{{ $post->category->name }}</h3>
            <h3
                class="
                font-bold 
                text-lg 
                hover:text-blue-500
                transition 
                duration-100 
                ease-out 
            ">
                {{ $post->title }}
            </h3>
            <h3 class="text-xs text-gray-500 flex gap-4 items-center justify-end">
                <span>
                    <i class="fas fa-user"></i>
                    &nbsp;
                    Şahvezir
                </span>
                <span>
                    <i class="fas fa-regular fa-calendar-days"></i>
                    &nbsp;
                    {{ $post->created_at->diffForHumans() }}
                </span>
                <span>
                    <i class="fas fa-comment"></i>
                    &nbsp;
                    {{ count($post->comment) }}
                </span>
            </h3>
        </div>
    </div>

</a>

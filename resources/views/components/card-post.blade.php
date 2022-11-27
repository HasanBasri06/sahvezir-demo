@props(['type', 'posts'])

<div class="w-full h-auto">

    <h3 class="text-xl font-bold ">
        {{ $posts[0]->category->name }}
    </h3>

    <div class="bigCategory mt-3 bg-white p-1">
        <img src="/images/{{ $posts[0]->image }}" class="w-full h-56 object-cover">
        <span class="flex mt-2 text-gray-500 justify-between text-xs px-3">
            <div class="flex gap-3 text-xm font-light mt-1">
                <span>
                    <i class="fas fa-user font-light"></i> Şahvezir
                </span>
                <span>
                    <i class="fas fa-clock font-light"></i> {{ $posts[0]->created_at->diffForHumans() }}
                </span>
            </div>
            <div class="flex gap-3 text-xm font-light mt-1">
                <span>
                    <i class="fas fa-comment font-light"></i> 14
                </span>
                <span>
                    <i class="fas fa-fire font-light"></i> 06.01.22
                </span>
            </div>
        </span>
        <div class="text-xs mt-2 leading-normal">
            @if (Str::length($posts[0]->body) > 132)
                {{ Str::substr($posts[0]->body, 0, 132) }} ...
            @else
                {{ $posts[0]->body }}
            @endif
        </div>
        <div class="mt-4">
            @if ($type == 'info')
                <a href=""
                    class="bg-blue-500 text-xs font-bold text-white py-2 px-2 rounded hover:bg-blue-700 transition">Daha
                    Fazla</a>
            @else
                <a href=""
                    class="bg-green-500 text-xs font-bold text-white py-2 px-2 rounded hover:bg-green-700 transition">Daha
                    Fazla</a>
            @endif
        </div>

        <hr class="mt-3">


        <div class="mt-3">
            @foreach ($posts->skip(1)->take(3) as $item)
                <div class="flex mt-4">
                    <img src="/images/{{ $item->image }}" class="w-4/12 h-24 object-cover">
                    <div class="pl-3 w-full items-center py-3">
                        <div class="text-xs">
                            <i class="fas fa-clock text-xs object-cover"></i> &nbsp;
                            {{ $item->created_at->diffForHumans() }}
                        </div>
                        <div class="text-xs mt-2">
                            @if (Str::length($item->body) > 125)
                                {{ Str::substr($item->body, 0, 125) }} ...
                            @else
                                {{ $item->body }}
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

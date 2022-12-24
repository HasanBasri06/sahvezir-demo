@props([
    'post'
])
<div class="w-full h-[500px]">
    <h3 class="py-2 font-bold text-xl text-blue-400">
        Gündemden Haberler
        &nbsp;
        <i class="fa-solid fa-fire"></i>
    </h3>
    <div class="w-full flex gap-2 flex-col">

        {{-- loop start --}}

        <div class="w-full bg-white h-20 flex">
            <div class="
                w-1/6  
                h-20 font-['Abril Fatface'] 
                flex 
                items-center 
                justify-center 
                text-4xl
                text-blue-600
                ft_ultra
            ">
                1
            </div>
            <div class="w-10/12 flex h-20">
                <div class="flex flex-col px-2 justify-center">
                    <h3 class="text-xs text-gray-500"><?= $post[0]->category->name ?></h3>
                    <p class="text-xs font-bold "><?= $post[0]->title; ?></p>
                </div>
            </div>
        </div>
        <div class="w-full bg-white h-20 flex">
            <div class="
                w-1/6  
                h-20 font-['Abril Fatface'] 
                flex 
                items-center 
                justify-center 
                text-4xl
                text-blue-500
                ft_ultra
            ">
                2
            </div>
            <div class="w-10/12 flex h-20">
                <div class="flex flex-col px-2 justify-center">
                    <h3 class="text-xs text-gray-500"><?= $post[1]->category->name ?></h3>
                    <p class="text-xs font-bold "><?= $post[1]->title; ?></p>
                </div>
            </div>
        </div>
        <div class="w-full bg-white h-20 flex">
            <div class="
                w-1/6  
                h-20 font-['Abril Fatface'] 
                flex 
                items-center 
                justify-center 
                text-4xl
                text-blue-400
                ft_ultra
            ">
                3
            </div>
            <div class="w-10/12 flex h-20">
                <div class="flex flex-col px-2 justify-center">
                    <h3 class="text-xs text-gray-500"><?= $post[2]->category->name ?></h3>
                    <p class="text-xs font-bold "><?= $post[2]->title; ?></p>
                </div>
            </div>
        </div>
        <div class="w-full bg-white h-20 flex">
            <div class="
                w-1/6  
                h-20 font-['Abril Fatface'] 
                flex 
                items-center 
                justify-center 
                text-4xl
                text-blue-300
                ft_ultra
            ">
                4
            </div>
            <div class="w-10/12 flex h-20">
                <div class="flex flex-col px-2 justify-center">
                    <h3 class="text-xs text-gray-500"><?= $post[3]->category->name ?></h3>
                    <p class="text-xs font-bold "><?= $post[3]->title; ?></p>
                </div>
            </div>
        </div>
        <div class="w-full bg-white h-20 flex">
            <div class="
                w-1/6  
                h-20 font-['Abril Fatface'] 
                flex 
                items-center 
                justify-center 
                text-4xl
                text-blue-200
                ft_ultra
            ">
                5
            </div>
            <div class="w-10/12 flex h-20">
                <div class="flex flex-col px-2 justify-center">
                    <h3 class="text-xs text-gray-500"><?= $post[4]->category->name ?></h3>
                    <p class="text-xs font-bold "><?= $post[4]->title; ?></p>
                </div>
            </div>
        </div>
        {{-- loop finish --}}

    </div>

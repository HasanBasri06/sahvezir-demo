<x-header>
    <div class="bigBox">
        <div class="w-full px-16 bg-white mt-3">



            <div class="w-full mt-3 h-full flex mt-4">



                {{-- sol panel --}}
                <div class="w-3/4">

                    @if (count($posts) > 0)
                        <h3 class="mt-5 font-bold text-2xl">{{ Str::ucfirst($slug) }} İlgili Haberler </h3>
                        <h4 class="text-sm mt-2 text-gray-500 font-bold">{{ count($posts) }} Sonuç Bulundu</h4>
                    @else
                        {{-- <h3 class="mt-5 font-bold text-2xl">{{ $slug }} İle İlgili Haber Bulunamadı </h3> --}}
                        <div class="flex justify-center">
                            <img src="/images/404NotFound.png" alt="">
                        </div>
                    @endif
                    {{-- search box list --}}
                    @foreach ($posts as $post)
                        <x-post-card :post="$post"></x-post-card>
                    @endforeach

                    

                </div>


                {{-- sağ panel --}}
                <div class="w-3/12 px-2">
                    <x-right-panel></x-right-panel>
                </div>
            </div>




        </div>
    </div>
    <!-- büyük görünüm bitiş -->
    <x-footer></x-footer>
</x-header>

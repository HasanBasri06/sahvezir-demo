<x-header>

    <div class="bigBox">
        <div class="w-11/12 m-auto mt-5">
            <div class="mt-10">
                <h1 class="text-3xl text-center">7/24 İnsan Kaynakları Ekibimiz Size Yanıt Verecektir</h1>
                <h3 class="text-center text-xl mt-5 text-gray-500">Ortalama Yanıt Süresi 2 Saat</h3>
            </div>

            <form action="" method="post" class="w-2/4 m-auto mt-8">
                @csrf
                <div class="flex flex-col gap-4">
                    <label class="text-xl">İsim Soyisim</label>
                    <input type="text" class="py-3 px-4" name="name" placeholder="İsim Giriniz...">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>

                <div class="flex flex-col gap-4 mt-5">
                    <label class="text-xl">Konu</label>
                    <input type="text" class="py-3 px-4" name="subject"
                        placeholder="Hangi konuda konuşmak istersiniz">
                    @error('subject')
                        {{ $message }}
                    @enderror
                </div>

                <div class="flex flex-col gap-4 mt-5">
                    <label class="text-xl">E-Posta</label>
                    <input type="email" class="py-3 px-4" name="email"
                        placeholder="Size geri bildirim verebilmek için email adresiniz gerekli">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>

                <div class="flex flex-col gap-4 mt-5">
                    <label class="text-xl">İçerik</label>
                    <textarea cols="20" rows="5" class="py-3 px-4 max-h-24" name="body"
                        placeholder="Bize görüşlerinizi bildirin"></textarea>
                    @error('body')
                        {{ $message }}
                    @enderror
                </div>

                <div class="mt-5">
                    <button class="bg-blue-500 text-white py-2 px-4">Gönder</button>
                </div>
            </form>
        </div>
    </div>

    <x-footer></x-footer>

</x-header>

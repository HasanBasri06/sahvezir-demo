<x-header>

    <div class="bigBox">
        <div class="w-full bg-white mt-5 px-16 h-8Y">
            <form autocomplete="off" action="/register" method="POST" class="max-sm:w-full w-8/12 text-center m-auto relative top-9">
                @csrf
                <h3 class="text-4xl">Kayıt Ol</h3>
                <div class="w-40 m-auto mt-5 rounded-full overflow-hidden border h-40 ">
                    <img src="/images/robot.jpg" alt="" class="object-cover">
                </div>

                <div class="max-sm:w-3/4 grid grid-cols-2 gap-4 w-8/12 m-auto mt-4">
                    <div class="flex flex-col">
                        <label class="text-start">İsim</label>
                        <input type="text" name="name" class="py-2 px-3 border mt-2"
                            placeholder="İsiminizi giriniz" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-red-400 text-xs text-start mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label class="text-start">Soyisim</label>
                        <input type="text" name="lastname" class="py-2 px-3 border mt-2"
                            placeholder="Soyisiminizi giriniz" value="{{ old('lastname') }}">
                        @error('lastname')
                            <span class="text-red-400 text-xs text-start mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="max-sm:w-3/4 grid grid-cols-1 w-8/12 m-auto mt-4">
                    <div class="flex flex-col">
                        <label class="text-start">E-Posta</label>
                        <input type="email" name="email" autocomplete="off" class="py-2 px-3 border mt-2" placeholder="E-posta giriniz"
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-400 text-xs text-start mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="max-sm:w-3/4 grid grid-rows-2 gap-4 w-8/12 m-auto mt-4">
                    <div class="flex flex-col">
                        <label class="text-start">Şifre</label>
                        <input type="password" name="password" class="py-2 px-3 border mt-2"
                            placeholder="İsiminizi giriniz" autocomplete="off">
                        @error('password')
                            <span class="text-red-400 text-xs text-start mt-2">{{ $message }}</span>
                        @enderror
                        @error('confirmpass')
                            <span class="text-red-400 text-xs text-start mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label class="text-start">Şifre Onayla</label>
                        <input type="password" name="confirmpass" class="py-2 px-3 border mt-2"
                            placeholder="Soyisiminizi giriniz">
                    </div>
                </div>


                <div class="max-sm:w-3/4 w-2/3  m-auto mt-5 flex justify-between gap-4">
                    <button type="submit"
                        class="border border-blue-400 text-blue-400 hover:bg-blue-400 hover:text-white transition py-1 px-2">Kayıt
                        Ol</button>
                    <a href="{{ route('login') }}"
                        class="text-red-400 text-red-400 hover:text-red-400 hover:text-red-900 transition py-1 px-2">Giriş
                        Yap</a>
                </div>
            </form>
        </div>
    </div>
    <x-footer></x-footer>
</x-header>

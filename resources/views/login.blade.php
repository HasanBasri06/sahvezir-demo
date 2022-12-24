<x-header>
    <div class="bigBox">
        
        <div class="w-full bg-white mt-5 px-16 h-6.5Y">
            <form autocomplete="off" action="/login" method="post" class="max-sm:w-full w-8/12 text-center m-auto relative top-9">
                @csrf
                <h3 class="text-4xl">Giriş Yap</h3>
                <div class="w-40 m-auto mt-5 rounded-full overflow-hidden border h-40">
                    <img src="/images/maskot.png" alt="" class="object-cover ">
                </div>
                <div class="max-sm:w-3/4 flex flex-col text-start mt-4 w-2/4 m-auto">
                    <label>E-Posta</label>
                    <input 
                        type="email" 
                        name="email" 
                        class="border py-3 px-4 mt-2 focus:ring focus:ring-3 outline-none transition" 
                        value="{{ old('email') }}"
                        placeholder="E-posta adresi giriniz"
                    >
                    @error('email')
                        <span class="text-red-400 mt-2 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="max-sm:w-3/4 flex flex-col text-start w-2/4 m-auto mt-4">
                    <label>Şifre</label>
                    <input 
                        type="password" 
                        name="password" 
                        class="border py-3 px-4 mt-2 focus:ring focus:ring-3 outline-none transition" 
                        placeholder="Şifre giriniz"
                    >
                    @error('password')
                        <span class="text-red-400 mt-2 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="max-sm:w-3/4 w-2/4 m-auto mt-4 flex justify-start gap-4">
                    <input type="checkbox" name="rememberme">
                    <span class="text-sm">Beni Hatırla</span>
                </div>

                <div class="max-sm:w-3/4 w-2/4 m-auto mt-4 flex justify-between gap-4">
                    <button type="submit"
                        class="border border-blue-400 text-blue-400 hover:bg-blue-400 hover:text-white transition py-1 px-2">Giriş
                        Yap</button>
                    <a href="{{ route('register') }}"
                        class="text-red-400 hover:text-red-900 hover:text-white transition py-1 px-2">Kayıt Ol</a>
                </div>
            </form>
        </div>
    </div>
    <x-footer></x-footer>
</x-header>

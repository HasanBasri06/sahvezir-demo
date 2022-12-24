<x-admin-layout>
    <div class="w-3/5 mt-20 m-auto py-8">
        @error('loginError')
            <div x-data="{ show: true, message: '{{ $message }}' }"
                class="text-red-800 h-12 rounded-sm my-5 px-8 w-full bg-red-200 flex items-center text-sm" x-text='message'
                x-show="show" x-init="setTimeout(() => show = false, 5000)">
            </div>
        @enderror

        <form action="/sahvezir/login" method="post">
            @csrf
            <h3 class="text-center text-2xl">Admin Giriş</h3>
            <div class="w-full mt-4">
                <h3 class="py-2">Email</h3>
                <input type="email" name="email" class="py-2 h-12 w-full px-3 bg-gray-100"
                    placeholder="Email giriniz...">
                @error('email')
                    <span class="text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="w-full mt-8">
                <h3 class="py-2">Şifre</h3>
                <input type="password" name="password" class="py-2 h-12 w-full px-3 bg-gray-100"
                    placeholder="Şifre giriniz...">
                @error('password')
                    <span class="text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mt-8">
                <button
                    class="py-2 px-7 transition bg-green-400 text-green-900 hover:ring-2 hover:ring-offset-2 hover:ring-green-400">Giriş
                    Yap</button>
            </div>

        </form>
    </div>
</x-admin-layout>

@extends('admin.layout')

@section('title', 'Gönderi Paylaş')

@section('content')

    @error('message')
        <div class="w-full bg-green-500 text-green-900 py-3 px-7 mb-7" x-data="{show:false}" x-init="setTimeout(() => show = true, 5000", x-show="show">{{ $message }}</div>
    @enderror

    <form action="{{route('save-new')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex text-black">
            <div class="w-3/4 px-2 ">
                <h1 class="text-2xl uppercase">Gönderi Paylaş</h1>
                <div class="flex flex-col mt-5">
                    <label class="text-lg">Gönderi Başlığı</label>
                    <input type="text" name="title"
                        class="border py-3 px-4 outline-none text-lg placeholder:text-sm mt-2 bg-gray-200"
                        placeholder="Gönderi Başlığı Giriniz">
                </div>

                <div class="flex flex-col mt-5">
                    <label class="text-lg">Gönderi Resmi</label>
                    <input type="file" name="image"
                        class="border py-3 px-4 outline-none text-lg placeholder:text-sm mt-2 bg-gray-200"
                        placeholder="Gönderi Başlığı Giriniz">
                </div>

                <div class="flex flex-col mt-5">
                    <label class="text-lg">Gönderi İçeriği</label>
                    <textarea name="body" cols="30" rows="8"
                        class="border py-3 max-h-40 px-4 outline-none text-lg placeholder:text-sm mt-2 bg-gray-200"></textarea>
                </div>
            </div>
            <div class="w-1/4 px-4">
                <div class="w-full flex justify-center">
                    <button class="m-auto w-2/4 py-2 text-white bg-blue-500">Yayınla</button>
                </div>

                <h3 class="mt-5">Kategori Seç</h3>
                <div class="w-full mt-3">
                    <select name="category" class="w-full text-black h-12" id="">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

    </form>
@endsection

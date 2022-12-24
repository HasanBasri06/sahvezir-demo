@extends('admin.layout')

@section('title', 'Tüm Gönderiler')

@section('content')

    {{ $posts->links() }}
    <div class="grid grid-cols-4 grid-flow-row gap-4 mt-3">
        <?php foreach ($posts as $post): ?>
        <div class="w-full h-72 border">
            <img src="/images/post/{{ $post->image }}" class="h-40 w-full object-cover" alt="">
            <h3 class="mt-1 text-center"><?= $post->title ?></h3>
            <div class="flex justify-around mt-3">
                <span class="text-sm text-blue-400 cursor-pointer">
                    edit
                    <i class="fas fa-pencil"></i>
                </span>
                <span class="text-sm text-red-400 cursor-pointer deleteBtn">
                    delete
                    <i class="fas fa-trash"></i>
                </span>
            </div>
        </div>
        <?php endforeach; ?>

    </div>

@endsection

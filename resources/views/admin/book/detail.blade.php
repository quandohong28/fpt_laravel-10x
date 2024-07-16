@extends('layouts.admin')

@section('title', $book->title)

@section('main')
    <div class="p-10">
        <div class="flex justify-between items-center mb-10">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Chi tiết sách</h1>
        </div>
        <div class="grid grid-cols-12 justify-between px-10">
            <div class="col-span-7">
                <p class="font-bold mb-4">{{ $book->title }}</p>
                <p>Tác giả: {{ $book->title }}</p>
                <p>Nhà phát hành: {{ $book->publisher }}</p>
                <p>Ngày phát hành: {{ $book->publication }}</p>
                <p>Giá: {{ number_format($book->price) }} VND</p>
                <p>Số lượng: {{ $book->quantity }}</p>
                <p>Danh mục: {{ $book->category_id }}</p>
                <p>Danh mục: {{ $book->created_at }}</p>
                <p>Danh mục: {{ $book->updated_at }}</p>
            </div>
            <div class="col-span-5">
                <img class="rounded-lg shadow-lg" src="{{ $book->thumbnail }}" alt="">
            </div>
        </div>
    </div>
@endsection

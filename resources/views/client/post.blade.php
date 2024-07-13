@extends('layouts.client')

@section('title', 'Bài viết')

@section('content')
    <div class="px-20 py-10">
        <h1 class="mb-5">Đây là trang bài viết</h1>

        @foreach ($posts as $post)
            <a href="#">
                <h2>Post view: {{ $post->view }}</h2>
            </a>
        @endforeach
    </div>

@endsection

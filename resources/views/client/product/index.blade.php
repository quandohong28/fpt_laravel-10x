@extends('layouts.client')

@section('title', 'Điện thoại')
@section('css')
    <style>
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endsection


@section('content')
    <div class="px-20 py-10">
        @livewire('breadcrumb')
        @livewire('list-category', ['parent_id' => $category->id])

        @livewire('list-product', ['id' => $category->id])
    </div>
@endsection

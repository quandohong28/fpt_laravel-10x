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
        @livewire('list-category', ['parent_id' => 0])

        <h1 class="px-12 text-2xl">iPhone 15 Series</h1>
        <div class="flex mb-12 overflow-x-auto hide-scrollbar">
            @for ($i = 0; $i < 4; $i++)
                @livewire('product-card')
            @endfor
        </div>

        <h1 class="px-12 text-2xl">iPhone 14 Series</h1>
        <div class="flex mb-12 overflow-x-auto hide-scrollbar">
            @for ($i = 0; $i < 3; $i++)
                @livewire('product-card')
            @endfor
        </div>

        <h1 class="px-12 text-2xl">iPhone Cũ</h1>
        <div class="flex mb-12 overflow-x-auto hide-scrollbar">
            @for ($i = 0; $i < 8; $i++)
                @livewire('product-card')
            @endfor
        </div>
    </div>
@endsection

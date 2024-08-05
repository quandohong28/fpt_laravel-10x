@extends('layouts.admin')


@section('title', 'Dashboard')

@section('main')
    <div class="grid grid-cols-4 gap-8 mb-8">
        <div class="border p-4 text-white bg-green-600">
            <p class="font-bold mb-10">Total Users</p>
            <p class="text-2xl">{{ $totalUsers }}</p>
        </div>
        <div class="border p-4 text-white bg-red-600">
            <p class="font-bold mb-10">Total Categories</p>
            <p class="text-2xl">{{ $totalCategories }}</p>
        </div>
        <div class="border p-4 text-white bg-blue-600">
            <p class="font-bold mb-10">Total Posts</p>
            <p class="text-2xl">{{ $totalPosts }}</p>
        </div>
        <div class="border p-4 text-white bg-yellow-300">
            <p class="font-bold mb-10">#Hastags</p>
            <p class="text-2xl">{{ $totalHastags }}</p>
        </div>
    </div>
    <div class="border p-8 min-h-screen">
        <h1 class="font-semibold mb-4 text-lg">Dashboard</h1>
    </div>

@endsection

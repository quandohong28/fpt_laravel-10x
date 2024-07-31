@extends('layouts.admin')


@section('title', 'Dashboard')

@section('main')
<div class="p-8 m-10 min-h-screen rounded-lg border">
    <div class="flex items-center justify-between">
        @auth
        <h1>Welcome <span class="text-blue-500">{{ Auth::user()->fullname }}</span> to Dashboard page</h1>
        <a href="{{ route('logout') }}" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Logout</a>
        @endauth
    </div>
</div>
@endsection
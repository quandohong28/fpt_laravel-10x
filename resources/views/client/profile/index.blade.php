@extends('layouts.client')


@section('title', 'Profile')

@section('main')
    <div class="border shadow-xl w-1/3 mx-auto mt-12 p-8">
        <h1 class="mb-8 font-bold text-lg text-center text-green-600">{{ Auth::user()->fullname }}</h1>
        <form action="{{ route('page.profile.update') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <div class="flex items-center justify-center w-full mb-4">
                    <label for="avatar" class="flex flex-col items-center justify-center w-full h-64 cursor-pointer">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <img src="{{ asset('storage/uploads/' . Auth::user()->avatar) }}"
                                class="w-60 h-60 object-cover">
                        </div>
                        <input id="avatar" type="file" class="hidden" name="avatar" />
                    </label>
                </div>
            </div>
            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div>
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname</label>
                    <input type="text" name="fullname" id="fullname" value="{{ Auth::user()->fullname }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="text" name="email" id="email" value="{{ Auth::user()->email }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                        placeholder="Ex. Apple">
                </div>
                <div>
                    <label for="username"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" value="{{ Auth::user()->username }}" name="username" id="username"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                </div>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update</button>
            </div>
        </form>
    </div>
@endsection

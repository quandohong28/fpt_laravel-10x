@extends('layouts.client')


@section('title', 'Profile')

@section('main')
    <div class="border shadow-xl py-12 min-h-screen mx-12">
        <h1 class="mb-8 font-bold text-2xl text-center">{{ Auth::user()->fullname }}</h1>
        <form action="{{ route('page.profile.update') }}" class="lg:w-2/3 w-full mx-auto px-4" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-col lg:flex-row lg:gap-12 lg:items-start">
                <div>
                    <div class="flex items-center justify-center w-full">
                        <label for="avatar"
                            class="flex flex-col items-center justify-center w-full h-64 rounded-lg cursor-pointer">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <img src="{{ asset('storage/uploads/' . Auth::user()->avatar) }}"
                                    class="w-60 h-60 object-cover rounded-lg">
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
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                    </div>
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" name="email" id="email" value="{{ Auth::user()->email }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="Ex. Apple">
                    </div>
                    <div>
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" value="{{ Auth::user()->username }}" name="username" id="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update</button>
            </div>
        </form>
    </div>
@endsection

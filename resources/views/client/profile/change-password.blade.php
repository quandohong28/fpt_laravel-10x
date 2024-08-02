@extends('layouts.client')


@section('title', 'Profile')

@section('main')
    <div class="border shadow-xl py-12 min-h-screen mx-12">

        <form class="max-w-sm mx-auto" action="{{ route('page.profile.postChangePassword') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-8">
                <label for="old_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Old
                    password</label>
                <input type="text" id="old_password" name="old_password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-8">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                    password</label>
                <input type="text" id="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Change</button>
        </form>

    </div>
@endsection

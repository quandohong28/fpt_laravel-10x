@extends('layouts.client')


@section('title', 'Profile')

@section('main')
    <div class="border shadow-xl w-1/3 mx-auto mt-12 p-8">
        <p class="text-center text-lg text-green-600 mb-8 font-bold">Change password</p>
        <form action="{{ route('page.profile.postChangePassword') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-8">
                <label for="old_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Old
                    password</label>
                <input type="text" id="old_password" name="old_password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" />
            </div>
            <div class="mb-8">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                    password</label>
                <input type="text" id="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" />
            </div>

            <button type="submit"
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Change</button>
        </form>
    </div>
@endsection

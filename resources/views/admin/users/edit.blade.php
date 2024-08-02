@extends('layouts.admin')

@section('title', 'Users')

@section('main')
    <div class="flex flex-col items-center justify-center py-8 border  w-1/2 mx-auto rounded-lg">
        <img class="h-60 w-60 object-cover rounded-full mb-8 "
            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8YXZhdGFyfGVufDB8fDB8fHww">
        <p class="font-bold text-lg">{{ $user->fullname }}</p>
        <p>{{ $user->username }}</p>
        <p class="mb-8">{{ $user->email }}</p>
        <form action="{{ route('admin.users.update', ['user' => $user]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="text-center">
                <select id="is_active" name="is_active"
                    class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1 px-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>
            </div>
        </form>
    </div>

@endsection

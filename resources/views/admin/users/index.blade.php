@extends('layouts.admin')

@section('title', 'Users')

@section('main')
    <div class="border p-8 min-h-screen">
        <div class="mb-4 flex justify-between items-center">
            <h1 class="font-semibold text-lg">List Users</h1>
            <a href="{{ route('admin.users.create') }}"
                class="text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium  text-sm px-5 py-2.5 text-center me-2 mb-2">
                Add user
            </a>
        </div>

        <div>
            <div class="">
                <form class="flex items-center max-w-sm mb-8" action="{{ route('admin.users.index') }}" method="GET">
                    <input type="text" name="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white "
                        placeholder="Search..." value="{{ request()->input('search') }}" />
                    <button type="submit"
                        class="p-2.5 ms-2 text-sm font-medium text-white bg-green-700 border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Info
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Role
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center gap-4">
                                        <div>
                                            <img class="rounded-full w-16 h-16 object-cover"
                                                src="{{ asset('storage/uploads/' . $user->avatar) }}">
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900 dark:text-white mb-2">
                                                {{ $user->fullname }}
                                            </div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">
                                                {{ $user->username }}
                                            </div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">
                                                {{ $user->email }}
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    @if ($user->is_admin == 1)
                                        <span
                                            class="inline-flex items-center px-3 py-0.5 text-xs rounded-full text-white bg-green-500">Admin</span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-3 py-0.5 text-xs rounded-full text-white bg-gray-500">User</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($user->is_active == 1)
                                        <div class="flex items-center gap-2 text-green-600">
                                            <span class="inline-flex p-1 rounded-full bg-green-600"></span>
                                            <span>Active</span>
                                        </div>
                                    @else
                                        <div class="flex items-center gap-2 text-gray-500">
                                            <span class="inline-flex p-1 rounded-full bg-gray-500"></span>
                                            <span>In active</span>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <a href="{{ route('admin.users.edit', ['user' => $user]) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ route('admin.users.destroy', ['user' => $user]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
@endsection

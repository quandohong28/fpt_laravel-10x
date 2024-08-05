@extends('layouts.admin')

@section('title', 'Users')

@section('main')
    <div class="border p-8 min-h-screen">
        <div class="mb-4 flex justify-between items-center">
            <h1 class="font-semibold text-xl text-green-600">Edit User</h1>
            <a href="{{ route('admin.users.index') }}"
                class="border border-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium  text-sm px-5 py-2.5 text-center me-2 mb-2">
                Cancel
            </a>
        </div>
        <form action="{{ route('admin.users.update', ['user' => $user]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-3 gap-12 items-end">
                <div class="flex flex-col items-center justify-center">
                    <div class="flex items-center justify-center w-full">
                        <label for="avatar"
                            class="flex flex-col items-center justify-center w-full my-4 rounded-lg cursor-pointer">
                            <div class="flex flex-col items-center justify-center">
                                <img class="h-40 w-40 object-cover rounded-full"
                                    src="{{ asset('storage/uploads/' . $user->avatar) }}">
                            </div>
                            <input id="avatar" type="file" class="hidden" name="avatar" />
                        </label>
                    </div>
                    <p>{{ $user->username }}</p>
                    <p class="mb-8 italic text-sm">{{ $user->email }}</p>
                    <div class="flex items-center justify-between gap-4">
                        <select id="is_admin" name="is_admin"
                            class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-500 focus:border-green-500 w-40 py-1 px-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Admin</option>
                            <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>Normal User</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                        <select id="is_active" name="is_active"
                            class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-500 focus:border-green-500 w-40 py-1 px-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            <option value="1" {{ $user->is_active == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $user->is_active == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="col-span-2 w-2/3 mx-auto">
                    <p class="font-medium text-lg mb-8">Change Password</p>
                    <div class="mb-4">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                            password</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="confirm_password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                            password</label>
                        <input type="password" id="confirm_password" name="confirm_password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        @error('confirm_password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit"
                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium text-sm px-5 py-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Change
                            Password</button>
                    </div>
                </div>
                <div class="col-span-3 w-2/3 mx-auto">
                    <p class="font-medium text-lg mb-8 text-center">Update Information</p>
                    <div class="grid gap-4 mb-8 grid-cols-2">
                        <div class="col-span-2">
                            <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                                name</label>
                            <input type="text" id="fullname" name="fullname" value="{{ $user->fullname }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" />
                            @error('fullname')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="username"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" id="username" name="username" value="{{ $user->username }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" />
                            @error('username')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="email" name="email" value="{{ $user->email }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="location"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                            <input type="text" id="location" name="location" value="{{ $user->location }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" />
                        </div>
                        <div>
                            <label for="tel"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tel</label>
                            <input type="text" id="tel" name="tel" value="{{ $user->tel }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" />
                        </div>
                        <div>
                            <label for="date_of_birth"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birth day</label>
                            <input type="date" id="date_of_birth" name="date_of_birth"
                                value="{{ $user->date_of_birth }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" />
                        </div>
                        <div class="col-span-2">
                            <label for="bio"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bio</label>
                            <textarea id="bio" name="bio" rows="8"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $user->date_of_birth }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 text-center">
                    <button type="submit"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium text-sm px-5 py-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update</button>
                </div>
            </div>
        </form>
    </div>

@endsection

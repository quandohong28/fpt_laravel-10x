@extends('layouts.admin')


@section('title', 'Movie List')

@section('main')
    <div class="mb-4">
        @session('success')
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endsession

        @session('error')
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">{{ session('error') }}</span>
            </div>
        @endsession

        @isset($notFoundMessage)
            <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                <span class="font-medium">{{ $notFoundMessage }}!</span>
            </div>
        @endisset

    </div>

    <div class="mb-10">
        <h1 class="font-bold text-lg mb-4">Movie List</h1>
        <div class="mb-4 flex justify-between">
            <a href="{{ route('movie.create') }}"
                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-10">Add
                Movie</a>
            <form action="{{ route('movie.index') }}" method="GET">
                <input type="text" name="search"
                    class="border border-gray-300 dark:border-gray-700 rounded-lg p-2 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"
                    placeholder="Search...">
                <button type="submit"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-10">Search</button>
            </form>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Poster
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Release Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td class="px-6 py-4">
                            {{ $movie->id }}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $movie->title }}
                        </th>
                        <td class="px-6 py-4">
                            <img class="w-24 rounded" src="{{ asset('storage/uploads/' . $movie->poster) }}"
                                alt="{{ $movie->poster }}">
                        </td>
                        <td class="px-6 py-4">
                            {{ $movie->release_date }}
                        </td>
                        <td class="px-6 py-4 flex gap-4">
                            <a href="{{ route('movie.show', $movie) }}"
                                class="font-medium text-blue-600 dark:text-bluƒe-500 hover:underline">Detail</a>
                            <a href="{{ route('movie.edit', $movie) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('movie.destroy', $movie) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure about this action???')"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="py-4 px-10 flex justify-end">
            {{ $movies->links() }}
        </div>
    </div>
@endsection

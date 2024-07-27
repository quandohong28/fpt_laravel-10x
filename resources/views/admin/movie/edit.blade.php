@extends('layouts.admin')

@section('title', 'Edit movie' . $movie->title)

@section('main')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit {{ $movie->title }}</h2>
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
            <form action="{{ route('movie.update', $movie) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mb-8">
                    <div class="sm:col-span-2">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" name="title" id="title" value="{{ $movie->title }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="sm:col-span-2">
                        <img class="rounded" src="{{ asset('storage/uploads/' . $movie->poster) }}"
                            alt="{{ $movie->poster }}">
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="poster">Poster</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="poster" name="poster" type="file">
                    </div>
                    <div class="w-full">
                        <label for="genres"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Genre</label>
                        <select id="genres" name="genre_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach ($genres as $genre)
                                <option {{ $genre->id == $movie->genre_id ? 'selected' : '' }} value="{{ $genre->id }}">
                                    {{ $genre->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="release_date"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Release Date</label>
                        <input type="date" name="release_date" id="release_date" value="{{ $movie->release_date }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="intro"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intro</label>
                        <textarea id="intro" rows="5" name="intro"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Your intro here">{{ $movie->intro }}</textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Update</button>
                </div>
            </form>
        </div>
    </section>
@endsection

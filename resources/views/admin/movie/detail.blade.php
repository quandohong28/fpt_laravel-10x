@extends('layouts.admin')

@section('title', $movie->title)

@section('main')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{ $movie->title }}</h2>
            <form action="{{ route('movie.store') }}">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mb-8">
                    <div class="sm:col-span-2">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" name="title" id="title" value="{{ $movie->title }}" disabled
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="sm:col-span-2">
                        <img class="rounded" src="{{ asset('storage/uploads/' . $movie->poster) }}"
                            alt="{{ $movie->poster }}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="genres"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Genre</label>
                        <input type="text" name="genre" id="genre" value="{{ $genre->name }}" disabled
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="release_date"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Release Date</label>
                        <input type="date" name="release_date" id="release_date" value="{{ $movie->release_date }}"
                            disabled
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="intro"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intro</label>
                        <textarea id="intro" rows="5" name="intro" disabled
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Your intro here">{{ $movie->intro }}</textarea>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

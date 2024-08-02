@extends('layouts.client')


@section('title', 'Home')

@section('main')
    <div class="m-8 min-h-screen grid sm:grid-cols-2 lg:grid-cols-3">
        <div class="w-full md:px-4 lg:px-6 py-5">
            <div class="bg-white shadow-lg hover:shadow-2xl">
                <a href="#">
                    <img src="https://images.pexels.com/photos/956999/milky-way-starry-sky-night-sky-star-956999.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="" class="h-56 w-full object-cover">
                    <div class="p-4">
                        <h1 class="font-bold text-lg">
                            UI,UX Concepts
                        </h1>
                        <p class="py-4 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                            voluptate
                            earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                            distinctio
                            perferendis tempore nemo sequi eos accusantium.
                        </p>
                        <div class="flex flex-wrap pt-8">
                            <div class="text-xs">
                                NOVEMBER 1,2019
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

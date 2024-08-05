@php
    use App\Models\Category;
    $categories = Category::all();
@endphp

<header class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="{{ route('page.home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="w-8" src="{{ asset('reuters-logo.png') }}" alt="">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Tech News</span>
        </a>
        @auth
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <img class="w-8 h-8 rounded-full object-cover"
                        src="{{ asset('storage/uploads/' . Auth::user()->avatar) }}">
                </button>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->fullname }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="{{ route('page.profile.index') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('page.profile.changePassword') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Change
                                Password</a>
                        </li>
                        <li>
                            <a href="{{ route('auth.logout') }}"
                                class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-red-200 dark:hover:text-white">Log
                                out</a>
                        </li>
                    </ul>
                </div>
            </div>
        @endauth

        @guest
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="{{ route('auth.login') }}"
                    class="py-2.5 px-5 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white border border-gray-200 hover:bg-gray-100 hover:text-green-600 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Login</a>
                <a href="{{ route('auth.register') }}"
                    class="focus:outline-none text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-600 dark:focus:ring-green-700">Register</a>
            </div>
        @endguest
    </div>
</header>
<nav class="px-20 py-3 bg-green-600 text-white">
    <div class="flex items-center">
        <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm uppercase">
            <li>
                <a href="{{ route('page.home') }}" class="hover:underline" aria-current="page">Home</a>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="categories"
                    class="uppercase flex items-center justify-between w-full dark:focus:text-white">
                    categories
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="categories"
                    class="z-10 hidden font-normal normal-case bg-green-600 w-full dark:bg-gray-700 dark:divide-gray-600 px-16 py-4">
                    <div class="grid grid-cols-8 gap-y-4 py-4">
                        @foreach ($categories as $category)
                            <a href="#" class="hover:underline">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="hastags"
                    class="uppercase flex items-center justify-between w-full">
                    # hashtags
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="hastags"
                    class="z-10 hidden font-normal normal-case bg-green-600 w-full dark:bg-gray-700 dark:divide-gray-600 px-16 py-4">
                    <div class="grid grid-cols-8 gap-y-8 py-8">
                        @for ($i = 0; $i < 6; $i++)
                            <a href="#" class="hover:underline"># ASDJHSD</a>
                        @endfor
                    </div>
                </div>
            </li>
            <li>
                <button data-modal-target="search-modal" data-modal-toggle="search-modal"
                    class="uppercase flex items-center justify-between w-full">
                    <svg class="w-5 h-5 ms-3" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                        height="100" fill="white" viewBox="0 0 50 50">
                        <path
                            d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z">
                        </path>
                    </svg>
                </button>
                <div id="search-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <div class="relative bg-white shadow dark:bg-gray-700 text-black p-8 normal-case">
                            <form action="{{ route('page.search') }}" class="mb-4">
                                <p class="text-lg mb-4 text-green-600">Search</p>
                                <div class="flex items-center gap-4">
                                    <input type="text" name="value"
                                        class="w-full border border-gray-200 dark:border-gray-600 p-2 focus:ring-2 focus:ring-green-300 dark:focus:ring-gray-600">
                                    <button type="submit"
                                        class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-green-600 dark:hover:bg-green-600 dark:focus:ring-green-700">Search</button>
                                </div>
                            </form>
                            <div class="mb-4">
                                <p class="mb-2">Recent seached</p>
                                <div>
                                    <div
                                        class="mx-2 my-1 inline-block text-xs bg-gray-200 text-black rounded px-2 py-0.5">
                                        Apple make iphone slower</div>
                                    <div
                                        class="mx-2 my-1 inline-block text-xs bg-gray-200 text-black rounded px-2 py-0.5">
                                        ios 18</div>
                                    <div
                                        class="mx-2 my-1 inline-block text-xs bg-gray-200 text-black rounded px-2 py-0.5">
                                        samsung z fold 6</div>
                                    <div
                                        class="mx-2 my-1 inline-block text-xs bg-gray-200 text-black rounded px-2 py-0.5">
                                        samsung z fold 6</div>
                                    <div
                                        class="mx-2 my-1 inline-block text-xs bg-gray-200 text-black rounded px-2 py-0.5">
                                        samsung z fold 6</div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <p class="mb-2">Hot Hashtags</p>
                                <div>
                                    <div
                                        class="mx-2 my-1 inline-block text-xs bg-green-600 text-white rounded px-2 py-0.5">
                                        #intel</div>
                                    <div
                                        class="mx-2 my-1 inline-block text-xs bg-green-600 text-white rounded px-2 py-0.5">
                                        #ios18</div>
                                    <div
                                        class="mx-2 my-1 inline-block text-xs bg-green-600 text-white rounded px-2 py-0.5">
                                        #samsung</div>
                                    <div
                                        class="mx-2 my-1 inline-block text-xs bg-green-600 text-white rounded px-2 py-0.5">
                                        #hot</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>

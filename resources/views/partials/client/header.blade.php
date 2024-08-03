<div class="mb-8">
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
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
    </nav>
    <div class="max-w-screen-xl px-4 py-3 mx-auto bg-green-600 text-white">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm uppercase">
                <li>
                    <a href="{{ route('page.home') }}" class="text-gray-900 dark:text-white hover:underline"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="categories"
                        class="uppercase flex items-center justify-between w-full dark:focus:text-white">
                        categories
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="categories"
                        class="z-10 hidden font-normal normal-case bg-green-600 w-full dark:bg-gray-700 dark:divide-gray-600 px-16 py-4">
                        <div class="grid grid-cols-8 gap-y-8 py-8">
                            @for ($i = 0; $i < 18; $i++)
                                <a href="#" class="text-gray-900 dark:text-white hover:underline">Category
                                    {{ $i + 1 }}</a>
                            @endfor
                        </div>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="hastags"
                        class="uppercase flex items-center justify-between w-full text-gray-700 md:hover:text-green-700 dark:text-gray-400 dark:hover:text-white dark:focus:text-white">
                        # hagtags
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="hastags"
                        class="z-10 hidden font-normal normal-case bg-white w-full dark:bg-gray-700 dark:divide-gray-600 px-16 py-4">
                        <div class="grid grid-cols-8 gap-y-8 py-8">
                            @for ($i = 0; $i < 6; $i++)
                                <a href="#" class="text-gray-900 dark:text-white hover:underline"># ASDJHSD</a>
                            @endfor
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

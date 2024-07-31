<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Tech News</span>
        </a>

        @auth
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <img class="w-8 h-8 rounded-full object-cover"
                        src="{{ asset('images/avatar' . Auth::user()->avatar) }}">
                </button>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->fullname }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
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
                    class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>
                <a href="{{ route('auth.register') }}"
                    class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Register</a>
            </div>
        @endguest
    </div>
</nav>
<div class="max-w-screen-xl px-4 py-3 mx-auto">
    <div class="flex items-center">
        <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:underline">Company</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:underline">Team</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
            </li>
        </ul>
    </div>
</div>

<nav class="bg-gray-50 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between md:justify-center mx-auto p-4">
        <a href="{{ route('page.home') }}" class="pe-8">
            <img src="https://i.pinimg.com/originals/ca/86/fb/ca86fb1a51f4761d1246518ee7640010.png" class="h-6" />
        </a>
        <button data-collapse-toggle="navbar-default" class="md:hidden dark:text-white" aria-controls="navbar-default"
            aria-expanded="false">
            <i class="fa-light fa-bars"></i>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="text-xs font-light flex-col md:flex md:flex-row items-center p-4 md:p-0 mt-4  rounded-lg md:space-x-8  md:mt-0 ">
                <li>
                    <a href="{{ route('page.phone') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Điện
                        thoại</a>
                </li>
                <li>
                    <a href="{{ route('page.tablet') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Máy
                        tính bảng</a>
                </li>
                <li>
                    <a href="{{ route('page.laptop') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Laptop</a>
                </li>
                <li>
                    <a href="{{ route('page.tv-and-display') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">TV
                        & Màn hình</a>
                </li>
                <li>
                    <a href="{{ route('page.accessory') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Phụ
                        kiện</a>
                </li>
                <li>
                    <a href="{{ route('page.post') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        Bài viết
                    </a>
                </li>
                <li>
                    <a href="{{ route('page.about') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Về
                        chúng tôi</a>
                </li>
            </ul>
        </div>
        <div class="flex justify-center items-center gap-4 ps-8 dark:text-white">
            <button>
                <i class="fa-light fa-magnifying-glass"></i>
            </button>
            <a href="{{ route('page.cart') }}">
                <i class="fa-light fa-cart-shopping"></i>
            </a>
        </div>
    </div>
</nav>

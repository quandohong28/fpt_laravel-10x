<div class="hidden w-full md:block md:w-auto" id="navbar-default">
    <ul
        class="text-xs font-light flex-col md:flex md:flex-row items-center p-4 md:p-0 mt-4  rounded-lg md:space-x-8  md:mt-0 ">
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('client.products', ['categorySlug' => $category->slug]) }}"
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
</div>

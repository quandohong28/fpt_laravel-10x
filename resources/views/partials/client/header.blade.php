<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Tech News</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <a href="{{ route('auth.login') }}"
                class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>
            <a href="{{ route('auth.register') }}"
                class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Register</a>
        </div>
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

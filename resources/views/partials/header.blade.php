<nav class="bg-gray-50 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between md:justify-center mx-auto p-4">
        <a href="{{ route('client.home') }}" class="pe-8">
            <img src="https://i.pinimg.com/originals/ca/86/fb/ca86fb1a51f4761d1246518ee7640010.png" class="h-6" />
        </a>
        <button data-collapse-toggle="navbar-default" class="md:hidden dark:text-white" aria-controls="navbar-default"
            aria-expanded="false">
            <i class="fa-light fa-bars"></i>
        </button>
        @livewire('navbar')
        <div class="flex justify-center items-center gap-4 ps-8 dark:text-white">
            <button>
                <i class="fa-light fa-magnifying-glass"></i>
            </button>
            <a href="{{ route('client.cart') }}">
                <i class="fa-light fa-cart-shopping"></i>
            </a>
        </div>
    </div>
</nav>

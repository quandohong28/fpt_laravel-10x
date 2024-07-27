<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>

    @include('partials.admin.header')

    @include('partials.admin.sidebar')

    <div class="sm:ml-64">
        <div class="p-8 mt-14">
            <main class="min-h-screen">
                @yield('main')
            </main>
        </div>
        @include('partials.admin.footer')
    </div>

    @livewireScripts
</body>

</html>

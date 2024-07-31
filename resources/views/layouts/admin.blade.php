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


    @include('partials.admin.sidebar')
    <div class="p-4 sm:ml-48">
        <div class="p-4">
            @include('partials.admin.header')
            @yield('main')
        </div>
    </div>

    @include('partials.admin.footer')

    @livewireScripts
</body>

</html>
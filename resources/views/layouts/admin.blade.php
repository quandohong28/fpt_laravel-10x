<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="">

    @include('partials.admin.sidebar')

    <div class="sm:ml-64">
        @include('partials.admin.header')
        <div class="p-4 min-h-screen dark:bg-slate-800 dark:text-white">
            @include('partials.admin.breadcrumb')
            @yield('main')
        </div>
        @include('partials.admin.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>
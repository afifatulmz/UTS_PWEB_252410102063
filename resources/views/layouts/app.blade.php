<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Orbitra Lab</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    body {
        background-color: #050814;
        background-image:
            radial-gradient(1px 1px at 20px 30px, #fff, transparent),
            radial-gradient(1px 1px at 90px 120px, #cfe8ff, transparent),
            radial-gradient(1.5px 1.5px at 160px 60px, #fff, transparent),
            radial-gradient(1px 1px at 230px 180px, #ffe9a8, transparent);
        background-size: 250px 250px;
        background-repeat: repeat;
    }
</style>
</head>
<body class="min-h-screen flex flex-col text-slate-200">

    @isset($username)
        <x-navbar :username="$username" />
    @endisset

    <div class="flex flex-1 flex-col md:flex-row">
        @isset($username)
            @include('partials.sidebar')
        @endisset

        <main class="flex-1 p-4 md:p-8">
            @yield('content')
        </main>
    </div>

    <x-footer />
</body>
</html>

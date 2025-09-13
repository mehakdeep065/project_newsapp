<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    @if (Route::has('login'))
        <div class="top-right links bg-gray-100 justify-between px-10 flex p-4 gap-10 ">
            <h2 class="text-3xl font-thin ">SpaakNews</h2>
            <div class="flex gap-10">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        </div>
    @endif
</body>

</html>
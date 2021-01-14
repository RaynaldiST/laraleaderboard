<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lara Leaderboard Tailwind</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
<div style="height: 25px;"></div>
@foreach($data as $key => $value)
    <div style="height: 25px;"></div>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
        <div class="md:flex">
            <div class="md:flex-shrink-0">
                <div
                    class="uppercase h-12 w-12 md:item-center tracking-wide text-sm text-indigo-300 font-semibold">{{ $value["ranking"] }}</div>
            </div>
            <div class="p-8">
                <div
                    class="uppercase tracking-wide text-sm text-indigo-300 font-semibold">{{ $value["first_name"]." ".$value["last_name"] }}</div>
                <p class="mt-2 text-gray-500">{{ $value["email"] }}</p>
                <p class="mt-2 text-gray-500">{{ $value["distance"] }}km</p>
                <div class="md:flex space-x-1">
                    <p class="mt-2 text-gray-500">{{ $value["hours"] }}h </p>
                    <p class="mt-2 text-gray-500">{{ $value["minutes"] }}m </p>
                    <p class="mt-2 text-gray-500">{{ $value["seconds"] }}s </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div style="height: 25px;"></div>
</body>
</html>

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
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
        <div class="md:flex-shrink-0">
            <img class="h-48 w-full object-cover md:w-48" src="https://picsum.photos/id/237/200/300" alt="Man looking at item at a store">
        </div>
        <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
            <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding
                customers for your new business</a>
            <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five
                ideas you can use to find your first customers.</p>
        </div>
    </div>
</div>

<div style="height: 25px;"></div>
<div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
    <div class="flex-shrink-0">
        <img class="h-12 w-12" src="https://img.icons8.com/color/48/000000/create-new-child-post.png"/>
    </div>
    <div>
        <div class="text-xl font-medium text-black">ChitChat</div>
        <p class="text-gray-500">You have a new message!</p>
    </div>
</div>

<div style="height: 25px;"></div>
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
        <div class="md:flex-shrink-0">
            <img class="h-48 w-full object-cover md:w-48" src="https://picsum.photos/seed/picsum/200/300" alt="Man looking at item at a store">
        </div>
        <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
            <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding
                customers for your new business</a>
            <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five
                ideas you can use to find your first customers.</p>
        </div>
    </div>
</div>
</body>
</html>

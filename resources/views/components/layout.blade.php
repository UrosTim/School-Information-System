<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIS | {{ $heading }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col h-screen bg-gray-500 text-white">
    <nav class="bg-gray-900 rounded-xl px-16 flex justify-between items-center py-4 border-b border-gray-600">
        <div>
            <a href="/">
                <img class="min-w-10" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
            </a>
        </div>
{{--        <div class="space-x-8 font-bold">--}}
{{--            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>--}}
{{--            <x-nav-link href="/subjects" :active="request()->is('subjects')">Subjects</x-nav-link>--}}
{{--            <x-nav-link href="/teachers" :active="request()->is('teachers')">Teachers</x-nav-link>--}}
{{--            <x-nav-link href="/students" :active="request()->is('students')">Students</x-nav-link>--}}
{{--        </div>--}}
        @auth
            <div class="space-x-2">
                <x-nav-link href="/notifications" :active="request()->is('notifications')">Notifications</x-nav-link>
            </div>
        @endauth
    </nav>
    <main class="flex flex-grow">
        <div class="flex font-bold flex-col bg-green-950 rounded-xl gap-x-2 w-1/12 min-w-32 text-center space-y-4 pt-10">
            @auth
                <div>
                    <x-side-link href="/" :active="request()->is('/')">Dashboard</x-side-link>
                </div>
                <div>
                    <x-side-link href="/reports" :active="request()->is('reports')">Reports</x-side-link>
                </div>
                <div>
                    <x-side-link href="/subjects" :active="request()->is('subjects')">Subjects</x-side-link>
                </div>
                <div>
                    <x-side-link href="/teachers" :active="request()->is('teachers')">Teachers</x-side-link>
                </div>
                <div>
                    <x-side-link href="/students" :active="request()->is('students')">Students</x-side-link>
                </div>
                <div>
                    <x-side-link href="/charts" :active="request()->is('charts')">Charts</x-side-link>
                </div>
                <div>
                    <x-side-link href="/profile" :active="request()->is('profile')">Profile</x-side-link>
                </div>
                <form action="/logout" method="POST">
                    @csrf

                    <x-form.button>Log Out</x-form.button>
                </form>
            @endauth
            @guest
                <div class="flex-grow-0">
                    <x-side-link href="/login" :active="request()->is('login')">Login</x-side-link>
                </div>
            @endguest
        </div>
        <div class="bg-gray-500 text-gray-50 p-6 flex-grow rounded-xl">
            {{ $slot }}
        </div>
    </main>
</body>
</html>

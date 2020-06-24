<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-100 h-screen antialiased leading-none">

    <div id="app" class="min-h-screen bg-gray-200 antialiased xl:flex xl:flex-col xl:h-screen">

        <header class="fixed w-full flex items-center justify-between text-white bg-gray-900">
            <div class="flex justify-center items-center px-4 py-4 md:w-64">
                <a href="/" class="font-bold text-green-500 hover:text-green-400">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <nav class="flex justify-between items-center px-4">
                <div class="block relative max-w-xs w-full">

                </div>
                <div class="flex items-center">
                    <div class="flex">
                        @auth
                            <a href="{{ url('/home') }}" class="block px-3 py-1 font-semibold hover:text-green-400">{{ __('Home') }}</a>
                        @else
                            <a href="{{ route('login') }}" class="block px-3 py-1 font-semibold hover:text-green-400 pr-6">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="block px-3 py-1 font-semibold hover:text-green-400">{{ __('Register') }}</a>
                            @endif
                        @endauth
                    </div>
                </div>
            </nav>
        </header>

        <div class="xl:flex-1 xl:overflow-x-hidden">
            @yield('content')
        </div>
    </div>

</body>
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.App = @json(['csrfToken' => csrf_token()]);
    </script>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">

    <div id="app" class="min-h-screen bg-gray-200 antialiased xl:flex xl:flex-col xl:h-screen" v-cloak>

        <sidebar
            inline-template
            name="navbar"
            key="navbar"
        >
            <header class="bg-gray-900 sm:flex sm:items-center sm:justify-between xl:bg-white">
                <div class="flex justify-between items-center px-4 py-4 sm:w-64 xl:bg-gray-900 xl:justify-center">
                    @include('layouts.navbar.brand')
                </div>
                <nav class="sm:flex sm:items-center sm:px-4 sm:flex-1 sm:justify-between" :class="{ 'hidden': !isOpen, 'block': isOpen }">
                    <div class="xl:block xl:relative xl:max-w-xs xl:w-full">
                        @include('layouts.navbar.left')
                    </div>
                    <div class="sm:flex sm:items-center">
                        @include('layouts.navbar.right')
                    </div>
                </nav>
            </header>
        </sidebar>

        <div class="xl:flex-1 xl:flex xl:overflow-y-hidden">

            <sidebar
                inline-template
                name="sidebar"
                key="sidebar"
            >
                @include('layouts.sidebar.menu')
            </sidebar>

            <main class="xl:flex-1 xl:overflow-x-hidden">
                <nav class="bg-green-500 text-white flex flex-row justify-between">
                    @yield('breadcrumb')
                </nav>

                @yield('content')
            </main>

            <notification></notification>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

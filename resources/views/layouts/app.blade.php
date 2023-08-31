<html class="h-full bg-white">
    <head>
        <title>{{ env('APP_NAME') }} - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @stack('cssfiles')
        <style>
            @stack('styles')
        </style>
        @vite('resources/css/app.css')
    </head>
    <body>
        @section('navbar')
        @show
        @section('sidebar')
        @show
        @yield('content')
        @stack('jsfiles')
        <script>
        @stack('scripts')
        </script>

    </body>
</html>

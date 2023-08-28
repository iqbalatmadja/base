<html class="bg-white" data-theme="light">
    <head>
        <title>Lab Name - @yield('title')</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  @stack('styles');
  </style>
  @vite('resources/css/app.css')
    </head>
    <body>
        @section('navbar')
        @show
        @section('sidebar')
        @show
        @yield('content')
        <script>
        @stack('scripts')
        </script>
    </body>
</html>

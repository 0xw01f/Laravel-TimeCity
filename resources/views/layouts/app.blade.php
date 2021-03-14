<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ page_title($title ?? null) }}</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen dark:bg-gray-800">
        
        <main role="main" class="flex flex-col justify-center items-center">
            @yield('content')
        </main>

        @include('layouts/partials/_footer')

    <script src="{{ asset('js/app.js') }}" defer> </script>
    
    <script>
       
    </script>

    </body>


</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Products</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body>
     
    <div id="app">
        <div class="container">
            <products-component> </products-component>
        </div>
    </div>

    </body>
    <!-- <script src="sweetalert2.all.min.js"></script> -->
    <script src="{{URL::asset('js/app.js')}}"></script>
</html>

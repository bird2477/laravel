<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Fonts -->


        <!-- Styles -->

    </head>
    <body>
        <div class="container" >
            @yield('content')
        </div>
    </body>
</html>

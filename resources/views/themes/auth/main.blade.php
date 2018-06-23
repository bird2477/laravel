<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/auth/signin.css') }}" rel="stylesheet">
        

    </head>
    <body>
        @include('themes.auth.components.nav')
        <main role="main">
            <div class="container" >
                @yield('content')
            </div>
        </main>
        @include('themes.auth.components.footer')
    </body>
</html>

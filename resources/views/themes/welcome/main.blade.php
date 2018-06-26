<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="/js/app.js" ></script>
        <link rel="stylesheet" href="/css/app.css" crossorigin="anonymous" >

        <!-- Fonts -->


        <!-- Styles -->

    </head>
    <body>
        @include('themes.welcome.components.nav')
        <main role="main">
            <div class="container" >
                @yield('content')
            </div>
        </main>
        @include('themes.welcome.components.footer')
    </body>
</html>

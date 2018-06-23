#How to create Themes
create themes in views/themes
how to management themes
 <a href="https://github.com/bird2477/laravel/blob/master/resources/views/themes/welcome/main.blade.php" >example<a>
@include('themes.welcome.componets.nav')


how to use themes
<a href="https://github.com/bird2477/laravel/blob/master/resources/views/index.blade.php" >example<a>
load themes
extends('themes.welcome.main')

@section('content')
content 
@endsection


# How to integrate bootstrap with Laravel
copy bootstrap.min.css into your public/css folder
copy bootstrap.js into your public/js folder
copy jquery.min.js into your public/js folder
Add the following to the head area of Themes<br>
 <a href="https://github.com/bird2477/laravel/blob/master/resources/views/themes/welcome/main.blade.php" >example</a><br>
 <script src="{{ asset('js/jquery.min.js') }}"></script><br>
 <script src="{{ asset('js/bootstrap.js') }}"></script><br>
 <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"><br>

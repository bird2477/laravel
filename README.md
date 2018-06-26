#How to create Themes
create themes in views/themes<br>
how to management themes<br>
 <a href="https://github.com/bird2477/laravel/blob/master/resources/views/themes/welcome/main.blade.php" >example<a><br>
@include('themes.welcome.componets.nav')<br>

#how to use themes<br>
<a href="https://github.com/bird2477/laravel/blob/master/resources/views/index.blade.php" >example<a><br>
load themes<br>
extends('themes.welcome.main')<br>
@section('content')<br>
content <br>
@endsection<br>

# How to integrate bootstrap and jquery and Vue with Laravel
install node js<br>
cmd to workjob<br>
npm install<br>
npm run development<br>

Add the following to the head area of Themes<br>
 <a href="https://github.com/bird2477/laravel/blob/master/resources/views/themes/welcome/main.blade.php" >example</a><br>
 <link href="/css/app.css" rel ><br>
<script src"/js/app.js" ></script><br>
#read command php artisan<br>
php  artisan list <br>
#crate database 
php  artisan make:model exampleName -cmr <br>
#how to update database
get data from request <br>
$post= new posts(); <br>
$post->title=$request->title; <br>
$post->save(); <br>
ect  <br>
<a href="https://laravel.com/docs/5.6/queries" > Query Builder</a><br>
#how to use routes<br>
routes/web.php<br>



@extends('themes.auth.main')

@section('content')
 @foreach($posts as $post)
   {{$post}}
 @endforeach

@endsection


@section('footer')


@endsection
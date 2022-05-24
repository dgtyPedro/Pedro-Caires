<?php $x = 0; ?>

@extends('index')

@section('image')
https://static.vecteezy.com/system/resources/previews/003/334/919/large_2x/desktop-source-code-and-wallpaper-by-coding-and-programming-free-photo.jpg
@endsection

@section('title')
Annotations
@endsection
@section('content')

@foreach ($contents as $c)
  <a href="{{$posts[$x]}}" style="margin: 0">
    <h3 style="text-align: start">{{$c[0]}}</h3>
    <h4>{{str_replace('<p>', '', mb_strimwidth($c[1], 0, 60, " [...]"))}}</h4>
  </a>
  <hr/>
  <?php $x++;?>
@endforeach


@endsection
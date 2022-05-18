@extends('index')

@section('image')
https://static.vecteezy.com/system/resources/previews/003/334/919/large_2x/desktop-source-code-and-wallpaper-by-coding-and-programming-free-photo.jpg
@endsection

@section('text-align')
text-center
@endsection

@section('title')
Portfolio
@endsection
@section('content')
<div class="row">

<div class="col portcols">
  <h3>Dumpi-fy</h3>
  <p>My favorite personal project. An elegant Spotify playlist manager made in PHP with love.</p>
  <p style="text-align: center"><a href="https://github.com/dgtyPedro/dumpi-fy" style="text-align: center; color: #03C383">Open Repository </a></p>
  <p style="text-align: center"><a href="https://dumpi-fy.herokuapp.com" style="text-align: center; color: #03C383">Open WebSite</a></p>

</div>
<div class="col portcols">
  <h3>I'm Labs Scrum</h3>
  <p>Daily Scrum's application that I created for the company I'm Labs. I have admin panel and smart calendar.</p>
  <p style="text-align: center; color:#ED0345">Internal Project</p>
</div>
<div class="col portcols">
  <h3>GeekHorror</h3>
  <p>
    Web application developed by me and<a href="https://twitter.com/vit0rrk">@@vit0rrk,</a> consists of a quiz site about
    survival horror.</p>
  <p style="text-align: center; bottom: 0; color:#A12A5E">Private Repository</p>
  <p style="text-align: center"><a href="https://geekhorror.com.br" style="text-align: center; bottom: 0; color: #03C383">Open WebSite</a></p>

</div>

</div>

<div class="row">
  
  <div class="col portcols">
    <h3>Lotopower</h3>
    <p>Lottery simulation systems made 100% in Laravel 100% by me.</p>
    <p style="text-align: center; bottom: 0; color:#A12A5E">Private Repository</p>
    <p style="text-align: center"><a href="https://lotopower.com.br" style="text-align: center; bottom: 0; color: #03C383">Open WebSite</a></p>
    </div>

  <div class="col portcols">
    <h3>ZapAlerta</h3>
    <p>SPA I made to present an application.
    </p>
    <p style="text-align: center; bottom: 0; color:#FBBF45">Internal Project</p>
  </div>

  <div class="col portcols">
    <h3>Rep. de Estudos</h3>
    <p> Repositories of studies I have for various technologies [Content in portuguese]
    
    <p style="text-align: center; line-height: 0px"><a href="https://github.com/dgtyPedro/EstudosLaravel" style="text-align: center; margin:0; color: #03C383">EstudosLaravel</a></p>
    <p style="text-align: center; line-height: 0px"><a href="https://github.com/dgtyPedro/EstudosCI" style="text-align: center; margin: 0; color: #03C383">EstudosCodeIgniter4</a></p>
    <p style="text-align: center; line-height: 0px"><a href="https://github.com/dgtyPedro/EstudosJS" style="text-align: center; margin: 0; color: #03C383">EstudosJavascript</a></p>
  </div>
  
  </div>


@endsection

@extends('index')

@section('image')
https://static.vecteezy.com/system/resources/previews/003/334/919/large_2x/desktop-source-code-and-wallpaper-by-coding-and-programming-free-photo.jpg
@endsection

@section('title')
About
@endsection
@section('content')

    <div style="margin-inline: 5vw">      
    <p class="mb-3" style="text-indent: 5vw;">
      Hi! My name is Pedro Gabriel Caires, I'm 18 years old brazilian currently working as a 
      Full Stack Web Developer at I'M Labs Tecnologia.</p>
      <div class="mb-3" style="display: flex; justify-content:center">
        <img title="my pretty face" style="margin:auto; width:30vw" src="{{asset('img/me.jpg')}}"/>
      </div>
      <p class="mb-3" style="text-indent: 5vw;">
      I started my journey in the programming world at 15 when 
      I had my first contact with Portugol, I was enchanted by the idea of 
      ​​creating my own line of code and after that I went to Python. In 
      these 3 years I had contact with numerous languages, from Java to Google Apps Script 
      (a Google proprietary scripting platform) but I fell in love with PHP and it became 
      my main stack. Despite this, I believe that the main characteristic that defines a good developer 
      is to be a great problem solver, and for that, we can't settle for a technology, only soon I try to 
      learn new ways and visions of how to create solutions, after all, I'm from the: "I may not know how 
      to do it, but I'm sure I know how to find out and do it".</p>
      <p class="mb-3" style="text-indent: 5vw;">I am an extremely proactive person and I know that the difference starts with each of us. 
      In addition to programming, I really like music, music production, games and art in general.</p>
      <br/>
    </div>

@endsection





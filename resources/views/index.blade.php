<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('img/icon.jpg')}}"/>
    
    <title>Pedro Caires</title>
  </head>
  <body>

  <div class="container">

    <nav class="navbar navbar-light navmobile ">
      <div class="container-fluid">
        <a class="title" style="font-weight: bolder; font-size: 2em; flex:1; line-height:1" href="../">Pedro Caires</a>
        <button  class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="text-align: end">
          <div class="offcanvas-body" style="text-align: end">
            <a href="./Sobre" style="font-size: 1.8em; font-weight: bolder;">Sobre </a><br/>
            <a href="./Portfólio" style="font-size: 1.8em; font-weight: bolder;">Portfólio</a><br/>
            <a href="https://github.com/dgtyPedro" style="font-size: 1.8em; font-weight: bolder;">GitHub</a><br/>
          </div>
        </div>
      </div>
    </nav>


  <div class="navdesktop">
    <div id="navbar">
      <div class="col navitems1">
        <a href="../"> <img src="{{asset('img/icon.jpg')}}" style="width: 3vw; border-radius: 100px; margin-right:1vw"/> Pedro Caires</a>
      </div>
      <div class="col navitems2">
        <a href="./Sobre">Sobre</a>
        <a href="./Portfólio">Portfólio</a>
        <a href="https://github.com/dgtyPedro">GitHub</a>
      </div>
    </div>
  </div>
    <hr class="customhr"/>

    <h1 class="mb-5 text-center">@yield('title')</h1>

    <p class="text-left">@yield('content')</p>

  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="scripts/script.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
<script>
  $('.title').quickfit();
</script>
</body>
</html>
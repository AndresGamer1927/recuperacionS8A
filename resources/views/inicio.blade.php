<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Styles -->
    </head>
    <body class="antialiased">
        <div class="wrapper fadeInDown">
            <div id="formContent">
              <!-- Tabs Titles -->
          
              <!-- Icon -->
              <div class="fadeIn first">
                <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
              </div>
          
              <!-- Login Form -->
              <form action="{{route('validar')}}" method="post">
                @csrf
                <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="login">
                <input type="text" id="password" class="fadeIn third" name="clave" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="ingresar">
              </form>
          
              <a href="{{route('conocidos.create')}}">Registrarse</a>

            </div>
          </div>
    </body>
</html>

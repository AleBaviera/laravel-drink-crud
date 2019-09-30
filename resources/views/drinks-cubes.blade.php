<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Styles -->

    </head>
    <body>
        <header>

        </header>
        <div class="container">
          <?php foreach ($drinks as $drink): ?>
            <div class="drinks-box">
              <p>{{$drink -> tipo}}</p><br>
              <p>{{$drink -> marca}}</p><br>
              <p>{{$drink -> prezzo}}</p><br>
              <p>{{$drink -> scadenza}}</p><br>
            </div>
          <?php endforeach; ?>

        </div>
        <footer>
        </footer>
    </body>
</html>

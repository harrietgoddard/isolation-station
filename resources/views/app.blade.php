<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <title>@yield("title")</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand:wght@400;500&display=swap" rel="stylesheet">
        <meta name="theme-color" content="#fafafa">

        @include("styles/styles")

    </head>

    <body>

        <header>

          <nav class="mt-2 navbar navbar-light">
              <a class="nav-link ml-auto" href="/articles">See journals</a>
          </nav>

        </header>

        <div class="container">

          <main class="mt-4">

              @yield("content")

          </main>

        </div>

    </body>

</html>
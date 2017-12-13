<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
  </head>
  <body>
    <div class="container">
      @yield('content')

    </div>
    @yield('footer')
  </body>
</html>

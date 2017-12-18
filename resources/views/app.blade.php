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
      @include('flash::message')

      @yield('content')

    </div>

    {{-- add the bootstrap js and jquery cdn --}}
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
      // if using an overlay modal then you have to call the modal() method
      $('#flash-overlay-modal').modal();

      $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>

    @yield('footer')
  </body>
</html>

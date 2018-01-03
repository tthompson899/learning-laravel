<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
  </head>
  <body>
    @include('articles.partials.nav')
    <div class="container">
      @include('flash::message')

      @yield('content')

    </div>

    {{-- add the bootstrap js and jquery cdn and select2 cdn from gulpfile --}}
    <script src="/js/all.js"></script>
    <script>
      // if using an overlay modal then you have to call the modal() method
      $('#flash-overlay-modal').modal();

      $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>

    @yield('footer')
  </body>
</html>

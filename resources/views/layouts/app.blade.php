<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>

    <title>@yield('title', config('app.name'))</title>

    @include('partials/head/meta')

    @include('partials/head/scripts')

    @include('partials/head/styles')

  </head>
  <body>
    <div class="site-container">

      @include('partials/header')

      @yield('content')

      @include('partials/footer')
      
    </div>
  </body>
</html>

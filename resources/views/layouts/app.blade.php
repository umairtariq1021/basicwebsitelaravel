<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Acme</title>
     <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/sb-admin.css')}}">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container mt-4 ">
      @if(Request::is('/'))
        @include('inc.showcase')
        @endif
      <div class="row mt-5">
        <div class="col-md-8 col-lg-8">
          @include('inc.messages')
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>
    </div>
    <footer id="footer" class="text-center">
      <p>Copyright 2019 &copy; Acme</p>
    </footer>


  </body>
</html>

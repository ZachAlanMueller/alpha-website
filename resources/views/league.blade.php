<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
  
  @include('includes.navigation')  

  <header class="row">
    @include('includes.header')
  </header>

  <div id="main" class="row">
    @yield('content')
  </div>

  <footer class="row">
      @include('includes.footer')
  </footer>

</div>
</body>
</html>


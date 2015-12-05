<!DOCTYPE html>
<html lang="en">
  
  <head>
    @include('layouts.bootstrap.partials.head')
    @stack('head')
  </head>

  @section('body')
  <body>
    
  @include('layouts.bootstrap.partials.nav')

  <div class="container">

    @if($errors->count() > 0)
      @include('layouts.bootstrap.partials.errors',['errors'=>$errors->all()])
    @endif

    @yield('container')

    <footer>
      @include('layouts.bootstrap.partials.footer')
    </footer>

  </div><!-- .container -->

  @include('layouts.bootstrap.partials.script')
  @stack('script')

  </body>
  @show

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  
  <body>

    @include('partials._nav')    
      <br>
    <div class="container">
      @include('partials._messages')
       <br>
      @yield('content')
       
      @include('partials._footer')

    </div> <!-- end of .container --> 

        @include('partials._javascript')

        @yield('scripts')

  </body>
</html>

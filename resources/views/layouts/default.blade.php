<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('includes.css')
</head>

<body>
   <div class="main-wrapper-area">
      @include('layouts.header')

      <div id="main" class="row">
        @yield('content')
      </div>

   </div>
   @include('layouts.footer')

   @include('includes.script')
   
   @stack('js')
</body>

</html>
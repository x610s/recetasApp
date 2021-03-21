<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RecetasApp</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  @yield('css')

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>  
    @include('layouts.navbar')
    <div class="container my-5">
        <div class="py-2  col-12 rounded ">
        @yield('botones')
        </div>
            @yield('contenido')
        
    </div>

    @yield('scripts')
</body>
</html>
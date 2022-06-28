<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mosaic</title>
    <!-- Scripts -->
    <script src="{{ ('http://localhost/Getting-started-with-Laravel-and-Vue-js/public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ ('css/app.css') }}" rel="stylesheet">
    
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />
      <link href="{{ ('css/css/bootstrap.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ ('css/css/all.css') }}" type="text/css">
      
      <link rel="stylesheet" href="{{ ('css/css/style.css') }}" as="style">
      <link rel="stylesheet" href="{{ ('css/css/custum.css') }}">
      <link rel="stylesheet" href="{{ ('css/css/blogs.css') }}" type="text/css">
      <noscript>
         <link rel='stylesheet' href=" {{ ('css/css/all.min.css') }}">
      </noscript>
      <link rel="stylesheet" href="{{ ('css/css/owl.carousel.min.css') }}" rel="stylesheet">
      <noscript>
         <link rel="stylesheet" href="{{ ('css/css/owl.carousel.min.css') }}">
      </noscript>
      <script src="{{ ('css/css/bootstrap.bundle.min.js') }}"></script>

      <script src="{{('js/js/jquery.min.js')}}"></script>
      <script src="{{('js/js/owl.carousel.min.js')}}"></script>
      <script src="{{('js/js/script3860.js')}}"></script>
      <!-- <script src="{{ ('js/js/home_scripts.js') }}"></script> -->
      
</head>

<body>
    <div id="app">     
                 
            <router-view></router-view>
        
    </div>
</body>

</html>
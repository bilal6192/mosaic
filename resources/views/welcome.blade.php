<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mosaic</title>
    <!-- Scripts -->
    <script src="{{ ('js/app.js') }}" defer></script>

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
      <link rel="stylesheet" href="{{ ('css/css/static_pages.css') }}" type="text/css">    

      <noscript>
         <link rel='stylesheet' href=" {{ ('css/css/all.min.css') }}">
      </noscript>
      <link rel="stylesheet" href="{{ ('css/css/owl.carousel.min.css') }}" rel="stylesheet">
      <noscript>
         <link rel="stylesheet" href="{{ ('css/css/owl.carousel.min.css') }}">
      </noscript>
      <script src="{{ ('css/css/bootstrap.bundle.min.js') }}"></script>
      <!-- <script src="{{ ('js/js/home_scripts.js') }}"></script> -->
      
      <script src="{{('js/js/jquery.min.js')}}"></script>
      <script src="{{('js/js/owl.carousel.min.js')}}"></script>
      <script src="{{('js/js/script3860.js')}}"></script>
    

      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
</head>
<style>

.custom-setting{
   margin-left:294px !important;
   
}
.custom-setting2{
   
   margin-bottom:0px !important;
   
   position:sticky !important;
}
.custom-setting3{
  
  text-decoration: none;
  position: fixed;
  right: 0;
  width: 50px;
  height: 100px;
  transform: rotate(180deg) translate(-4px);
  writing-mode: vertical-lr;
  justify-content: center;
  text-align: center;
  top: 50%;
  background-color: #2e2e2e !important;
  z-index: 11111

}
</style>

<body>
    <div id="app">     
                 
            <router-view></router-view>
        
    </div>
</body>

</html>
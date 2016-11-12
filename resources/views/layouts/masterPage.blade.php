<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('public/page/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/page/css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
     <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
    
</head>
<body>
    <!-- Navigation -->        
    @include('layouts.menuView') 

    <!-- Page Content -->
    @include('layouts.themeView') 
    
    <div class="container">

        
	@yield('content')	

    </div>
    <div class="container">
        @include('layouts.footerView') 
    </div>    

    <div id="popUpBackground"></div>
    <!-- Scripts -->
    <script src="{{ URL::asset('public/js/app.js') }}"></script>
        <!-- jQuery Version 1.11.1 -->
    <script src="{{ URL::asset('public/page/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('public/page/js/popup.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=" {{ URL::asset('public/page/js/bootstrap.min.js') }} "></script>
  
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('public/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/admin/css/style.css') }}" rel="stylesheet">

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
     <!-- Scripts -->
    <script src="{{ URL::asset('public/js/admin/app.js') }}"></script>
        <!-- jQuery Version 1.11.1 -->
    <script src="{{ URL::asset('public/admin/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('public/admin/js/popup.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=" {{ URL::asset('public/admin/js/bootstrap.min.js') }} "></script>
</head>
<body>
        <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('admin') }}">Shop</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Orders</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/product') }}">Products</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/category') }}">Category</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/shopSettings') }}">Shop settings</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/theme') }}">Theme settings</a>
                    </li>
                    <li>
                        <a target="_blank" href="{{ url('/') }}">View page</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        
	@yield('content')	

    </div>
        

    <div id="popUpBackground"></div>
   
</body>
</html>

<!doctype html>
<html lang="en">
    <head>
        <title>Flyfairuk - @yield('pageTitle')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{ 'assets/images/favicon.png' }}" type="image/x-icon">

  
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
    <link rel="stylesheet" href="{{ 'assets/css/bootstrap.min.css' }}">
        
        <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{ 'assets/css/font-awesome.min.css' }}">
            
        <!-- Custom Stylesheets -->	
    <link rel="stylesheet" href="{{ 'assets/css/style.css' }}">
    <link rel="stylesheet" id="cpswitch" href="{{ 'assets/css/orange.css' }}">
    <link rel="stylesheet" href="{{ 'assets/css/responsive.css' }}">
    
        <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="{{ 'assets/css/owl.carousel.css' }}">
    <link rel="stylesheet" href="{{ 'assets/css/owl.theme.css' }}">
        
        <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="{{ 'assets/css/flexslider.css' }}" type="text/css" />
        
        <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="{{ 'assets/css/datepicker.css' }}">
        
        <!-- Magnific Gallery -->
    <link rel="stylesheet" href="{{ 'assets/css/magnific-popup.css' }}">

      {{-- App css --}}
    <link rel="stylesheet" href="{{ 'css/app.css' }}">
    
    </head>
    
    
    <body id="main-homepage">
    
           
        <!--====== LOADER =====-->
        <div class="loader"></div>

        @yield('content')
        
        <!-- Page Scripts Starts -->
    <script src="{{ 'assets/js/jquery.min.js' }}"></script>
    <script src="{{ 'assets/js/jquery.magnific-popup.min.js'}}"></script>
    <script src="{{ 'assets/js/bootstrap.min.js'}}"></script>
    <script src="{{ 'assets/js/jquery.flexslider.js'}}"></script>
    <script src="{{ 'assets/js/bootstrap-datepicker.js'}}"></script>
    <script src="{{ 'assets/js/owl.carousel.min.js'}}"></script>
    <script src="{{ 'assets/js/custom-navigation.js'}}"></script>
    <script src="{{ 'assets/js/custom-flex.js' }}"></script>
    <script src="{{ 'assets/js/custom-owl.js'}}"></script>
    <script src="{{ 'assets/js/custom-date-picker.js' }}"></script>
    <script src="{{ 'assets/js/custom-video.js' }}"></script>
        <!-- Page Scripts Ends -->
        
    </body>
</html>
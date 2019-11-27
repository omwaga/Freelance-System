<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home One || JobHelp</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- favicon
        ============================================ -->        
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        
        <!-- Google Fonts
        ============================================ -->        
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
        
        <!-- All css files are included here
        ============================================ -->    
        <!-- Bootstrap CSS
        ============================================ -->        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"> 
        
        <!-- This core.css file contents all plugins css file
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/core.css')}}">
        
        <!-- Theme shortcodes/elements style
        ============================================ -->  
        <link rel="stylesheet" href="{{ asset('css/shortcode/shortcodes.css')}}">
        
        <!-- Color Swithcer CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/plugins/color-switcher.css')}}">
        
        <!--  Theme main style
        ============================================ -->  
        <link rel="stylesheet" href="{{ asset('style.css')}}">
        
        <!-- Color CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/plugins/color.css')}}">
        
        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
        
        <!-- Modernizr JS -->
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>        
        
        <!-- Color Css Files
        ============================================ -->    
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/color-one.css')}}" title="color-one" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/color-two.css')}}" title="color-two" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/color-three.css')}}" title="color-three" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/color-four.css')}}" title="color-four" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/color-five.css')}}" title="color-five" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/color-six.css')}}" title="color-six" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/color-seven.css')}}" title="color-seven" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/color-eight.css')}}" title="color-eight" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/color-nine.css')}}" title="color-nine" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/color-ten.css')}}" title="color-ten" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/color-ten.css')}}" title="color-ten" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/pattren1.css')}}" title="pattren1" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/pattren2.css')}}" title="pattren2" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/pattren3.css')}}" title="pattren3" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/pattren4.css')}}" title="pattren4" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/pattren5.css')}}" title="pattren5" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/background1.css')}}" title="background1" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/background2.css')}}" title="background2" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/background3.css')}}" title="background3" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/background4.css')}}" title="background4" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/background5.css')}}" title="background5" media="screen" />

        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'desc' );
</script>
    </head>  
    <body>

        @include('layouts.navbar')

        @yield('content')


        @include('layouts.footer')
        <!-- jquery latest version
        ========================================================= -->   
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        
        <!-- Bootstrap framework js
        ========================================================= -->           
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        
        <!-- Owl Carousel js
        ========================================================= -->       
        <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
        
        <!-- nivo slider js
        ========================================================= -->       
        <script src="{{ asset('lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
        <script src="{{ asset('lib/nivo-slider/home.js')}}" type="text/javascript"></script>
        
        <!-- Js plugins included in this file
        ========================================================= -->   
        <script src="{{ asset('js/plugins.js')}}"></script>
        
        <!-- Video Player JS
        ========================================================= -->           
        <script src="{{ asset('js/jquery.mb.YTPlayer.js')}}"></script>
        
        <!-- AJax Mail JS
        ========================================================= -->           
        <script src="{{ asset('js/ajax-mail.js')}}"></script>
        
        <!-- Mail Chimp JS
        ========================================================= -->           
        <script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
        
        <!-- StyleSwitch JS
        ========================================================= -->       
        <script src="{{ asset('js/styleswitch.js')}}"></script>
        
        <!-- Waypoint Js
        ========================================================= -->   
        <script src="{{ asset('js/waypoints.min.js')}}"></script>
        
        <!-- Main js file contents all jQuery plugins activation
        ========================================================= -->       
        <script src="{{ asset('js/main.js')}}"></script>
        
    </body>
</html>
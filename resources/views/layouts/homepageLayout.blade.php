<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>selena life styel and travel site</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- ==== reset stylesheet ==== -->
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css')}}" type="text/css" />
    <!-- ==== bootstrap css ==== -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}" type="text/css" />
    <!-- ==== font awesome css ==== -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" type="text/css" />
    <!-- ==== MultiLevelMenu ==== -->
    <link rel="stylesheet" href="{{asset('plugins/MultiLevelMenu/component.css')}}" type="text/css" />
    <!-- jassor slider css -->
     
    <link rel="stylesheet" href="{{asset('css/slider.css')}}" type="text/css" />
    <!-- owl craowsel css -->
    <link rel="stylesheet" href="{{asset('plugins/owl-carousel/owl.carousel.css')}}" type="text/css" /> 
    
    
    
    <!-- ==== custom css ==== -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
    @yield('css')
</head>
<body>
    @include('inc.header')

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    @yield('content')
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 hidden-xs">
                    @include('inc.sidebar')
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
    @include('inc.footer')
    <!-- JavaScripts -->
   <!-- ==== jQuery library ==== -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.1.min.js')}}"></script>
    <!-- ==== bootstrap js ==== -->
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('plugins/owl-carousel/owl.carousel.min.js')}}"></script>
     <script type="text/javascript" src="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js')}}"></script> 
    <!-- ==== ie-emulation-modes-warning ==== -->
    <script type="text/javascript" src="{{URL::asset('js/ie-emulation-modes-warning.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="{{URL::asset('js/ie10-viewport-bug-workaround.js')}}"></script>
    <!-- jssor slider scripts-->
    <script type="text/javascript" src="{{URL::asset('plugins/home-slider/jssor.slider.mini.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('plugins/home-slider/docs.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('plugins/home-slider/custom.js')}}"></script>
    <!-- ==== owl carousel ==== -->
    <!-- ==== responsive-menu ==== -->
    <script type="text/javascript" src="{{URL::asset('plugins/MultiLevelMenu/modernizr.custom.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('plugins/MultiLevelMenu/jquery.dlmenu.js')}}"></script>
    
    <script type="text/javascript" src="{{URL::asset('public/js/custom.js')}}"></script> 
    <script>
        $( document ).ready(function() {
            console.log('why its not working');
            $(".owl-carousel").owlCarousel();
        });
    </script>

    @yield('Script')

</body>
</html>

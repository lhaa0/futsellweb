<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{URL('assets/logo_round.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Futsell</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="{{URL('assets/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/main.css')}}">
</head>

<body>

    <header id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img width="30" height="30" src="{{URL('assets/logo_round.png')}}" alt=""
                            title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#home">Home</a></li>
                        <li><a href="#feature">Features</a></li>
                        <li><a href="{{URL::asset('futsellv2.apk')}}">Android App</a></li>
                        <li><a class="ticker-btn" href="{{URL('/login')}}">Get Started</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->


    @yield('mainContent')


    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Me</h6>
                        <p>
                            Ini hanya sekedar tugas. Saya berharap dapat nilai yang terbaik untuk saya
                        </p>
                        <p class="footer-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-5  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Nantikan terus perkembanganya</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="https://www.facebook.com/lhaa0"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/lhaa_0"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{URL('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{URL('assets/s/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{URL('assets/js/easing.min.js')}}"></script>
    <script src="{{URL('assets/js/hoverIntent.js')}}"></script>
    <script src="{{URL('assets/js/superfish.min.js')}}"></script>
    <script src="{{URL('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{URL('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{URL('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{URL('assets/js/parallax.min.js')}}"></script>
    <script src="{{URL('assets/js/mail-script.js')}}"></script>
    <script src="{{URL('assets/js/main.js')}}"></script>
</body>

</html>

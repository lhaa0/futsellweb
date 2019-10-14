<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Futsell</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{URL::asset('assets/logo_round.png')}}">
    <link rel="shortcut icon" href="{{URL::asset('assets/logo_round.png')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{URL::asset('assets/ela/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/ela/assets/css/style.css')}}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <input type="text" placeholder="Search" class="form-control" style="margin: 15px;">
                    <li class="menu-title">Lapangan</li><!-- /.menu-title -->
                    <li id="lapangan">

                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="{{URL::asset('assets/logo.png')}}"
                            alt="Logo"></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <h4>{{Session('name')}}</h4>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" onclick="logout()"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            @yield('content')
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        {{-- {{ csrf_field() }} --}}
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{URL::asset('assets/ela/assets/js/main.js')}}"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="{{URL::asset('assets/ela/assets/js/init/weather-init.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="{{URL::asset('assets/ela/assets/js/init/fullcalendar-init.js')}}"></script>

    {{-- dataTabel --}}
    <script src="{{URL::asset('assets/ela/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{URL::asset('assets/ela/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/ela/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/ela/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/ela/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/ela/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/ela/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/ela/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/ela/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/ela/assets/js/init/datatables-init.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


    <!--Local Stuff-->
    @include('../setting/firebase')
    <script>
        jQuery(document).ready(function($) {
            firebase.database().ref('dataFutsal/').on('value', function (snapshot) {
                // alert(snapshot.val())
                var value = snapshot.val();
                var htmls = []
                $.each(value, function (index, value) {
                    if (value && value.uid_admin == "{{Session('id')}}") {
                        htmls.push("<form action='{{URL('/admin')}}/"+index+"' method='post'><input type='hidden' name='_token' value='{{csrf_token()}}'><input type='hidden' value='"+value.uid_admin+"' name='uid_admin'/><input style='text-align:left;' class='btn btn-sm btn-link' type='submit' value='"+value.nama_futsal+"'/></form>")
                        // htmls.push("<a href='{{URL('/admin')}}/"+index+"'>"+value.nama_futsal+"</a>")
                    }
                });
                $('#lapangan').html(htmls);
            });
        });
        function logout(){
            firebase.auth().signOut();
            window.location.href="{{URL('/admin/logout')}}"
        }
    </script>
</body>

</html>
@yield('script')

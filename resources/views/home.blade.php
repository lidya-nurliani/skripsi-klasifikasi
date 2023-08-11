<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 08:56:24 GMT -->
<head>
<style>
        .centered-text {
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
            color:white;
            font-size:24px;
            font-weight:bold;
        }
</style>
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('template/images/favicon.ico') }}">

        <!-- C3 Chart css -->
        <link href="{{ asset('template/libs/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('template/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{ asset('template/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/css/app-dark.min.css') }}" rel="stylesheet" type="text/css"  id="app-stylesheet" />

    </head>
    
    <body data-layout="horizontal">
        

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Navigation Bar-->
            <header id="topnav">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">
                        <ul class="list-unstyled topnav-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
    
                        
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('template/images/users/user1.png') }}" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name ml-1">
                                    Hai {{ Auth::user()->name }} !<i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                     <!-- item-->
                                     <a href="{{ route('profile') }}" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>Profile</span>
                                    </a>
                                    
                                    <a href=" {{ route('logout') }}" method="POST" class="dropdown-item notify-item"  
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> 
                                        <i class="fe-log-out"></i><span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
    
                        <!-- LOGO -->
                        <div class="logo-box">
                            <a href="#" class="logo text-center logo-light">
                                <span class="logo-lg">
                                    <img src="{{ asset('template/images/logodinas.png') }}" alt="" height="30">
                                    <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                                </span>
                            </a>
                        </div>
    
                        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end Topbar -->

                
                <div class="topbar-menu bg-primary">
                    <div class="container-fluid ">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu ">

                                <li class="has-submenu">
                                    <a href="{{ route('home') }}" class="text-white"> <i class="fe-airplay"></i>Home</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="{{ route('index-dataken') }}" class="text-white">
                                        <i class="fe-briefcase"></i>Data Kendaraan
                                    </a>
                                </li>

                                <li class="has-submenu">
                                    <a href="{{ route('create-klasifikasi') }}"class="text-white">
                                        <i class="far fa-file-alt"></i>Data Training/Testing</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="{{ route('prediksi') }}"class="text-white">
                                        <i class="fe-box"></i>
                                    Klasifikasi</a>
                                </li>

                                
                                @role('Admin')
                                <li class="has-submenu">
                                    <a href="#" class="text-white"> <i class="fe-airplay"></i>Data Master</a>
                                    <ul class="submenu">
                                        <li><a href="index.html"> Merk Kendaraan</a></li>
                                        <li><a href="dashboard-2.html">Jenis Kendaraan</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="{{ route('data-user') }}"class="text-white">
                                        <i class="fe-user"></i>
                                        Data Pengguna
                                    </a>
                                </li>
                                @endrole
                            </ul>
                            
                            <!-- End navigation menu -->

                            <div class="clearfix"></div>
                        </div>
                        <!-- end #navigation -->
                    </div>
                    
                    <!-- end container -->
                </div>
                
                <!-- end navbar-custom -->
            </header>
            <!-- End Navigation Bar-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
    
                                        <div class="row">  
                                            <div class="col-lg-12">
                                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                                    </ol>
                                                    <div class="carousel-inner" role="listbox">

                                                        <div class="carousel-item active">
                                                            <img class="d-block" src="{{ asset('template/images/small/slide1.png') }}" alt="First slide" />
                                                            <div class="centered-text">
                                                                <h2 class="text-white" align="center">SELAMAT DATANG</h2>
                                                                <h3>Aplikasi Klasifikasi Kelayakan Kendaraan Bermotor</h3>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <img class="d-block" src="{{ asset('template/images/small/slide1.png') }}" alt="First slide" />
                                                            <div class="centered-text">
                                                                <h2 class="text-white" align="center">KLASIFIKASIKAN KELAYAKAN KENDARAAN ANDA DISINI</h2>
                                                                <h4 align="center">mari kita lihat faktor-faktor penting yang mempengaruhi status kelayakan kendaraan anda</h4>
                                                            </div>
                                                        </div>

                                                      
                                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>    
                                        
                                        <!-- end row -->
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->   

                     
                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2023 &copy; DISPANTPH <a href="#">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
            </div>
            <div class="slimscroll-menu">
        
                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="{{ asset('template/images/layouts/light.png') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="{{ asset('template/images/layouts/dark.png') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="{{ asset('template/css/bootstrap-dark.min.css') }}" 
                            data-appStyle="{{ asset('template/css/app-dark.min.css') }}" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="asse{{ asset('template/images/layouts/rtl.png') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="{{ asset('template/css/app-rtl.min.css') }}" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset('template/images/layouts/dark-rtl.png') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-rtl-mode-switch" data-bsStyle="{{ asset('template/css/bootstrap-dark.min.css') }}" 
                            data-appStyle="{{ asset('template/css/app-dark-rtl.min.css') }}" />
                        <label class="custom-control-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>

                    <a href="https://1.envato.market/y2YAD" class="btn btn-danger btn-block mt-3 mb-5" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

     

        <!-- Vendor js -->
        <script src="{{ asset('template/js/vendor.min.js') }}"></script>

        <!--C3 Chart-->
        <script src="{{ asset('template/libs/d3/d3.min.js') }}"></script>
        <script src="{{ asset('template/libs/c3/c3.min.js') }}"></script>

        <script src="{{ asset('template/libs/echarts/echarts.min.js') }}"></script>

        <script src="{{ asset('template/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('template/js/app.min.js') }}"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 08:57:08 GMT -->
</html>

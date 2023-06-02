

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 08:56:24 GMT -->
<head>
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
        <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{ asset('template/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/css/app.min.css') }}" rel="stylesheet" type="text/css"  id="app-stylesheet" />

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
                                    <img src="{{ asset('template/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name ml-1">
                                    {{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>Profile</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-lock"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    
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

                            <li class="dropdown notification-list">
                                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                    <i class="fe-settings noti-icon"></i>
                                </a>
                            </li>
    
    
                        </ul>
    
                        <!-- LOGO -->
                        <div class="logo-box">

                            <a href="index.html" class="logo text-center logo-dark">
                                <span class="logo-lg">
                                    <img src="{{ asset('template/images/logo-dark.png') }}" alt="" height="24">
                                    <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                                </span>
                                <span class="logo-sm">
                                    <!-- <span class="logo-lg-text-dark">A</span> -->
                                    <img src="{{ asset('template/images/logo-sm.png') }}" alt="" height="24">
                                </span>
                            </a>

                            <a href="index.html" class="logo text-center logo-light">
                                <span class="logo-lg">
                                    <img src="{{ asset('template/images/logo-light.png') }}" alt="" height="24">
                                    <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                                </span>
                                <span class="logo-sm">
                                    <!-- <span class="logo-lg-text-dark">A</span> -->
                                    <img src="{{ asset('template/images/logo-sm.png') }}" alt="" height="24">
                                </span>
                            </a>
                        </div>
    
                        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end Topbar -->

                <div class="topbar-menu">
                    <div class="container-fluid">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">

                                <li class="has-submenu">
                                    <a href="#"> <i class="fe-airplay"></i>Home</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="{{ route('index-dataken') }}">
                                        <i class="fe-briefcase"></i>Data Kendaraan
                                    </a>
           
                                </li>

                                <li class="has-submenu">
                                    <a href="{{ route('create-klasifikasi') }}">
                                        <i class="fe-box"></i>Klasifikasi</a>
                  
                                </li>


                                <li class="has-submenu">
                                    <a href="#"> <i class="fe-sidebar"></i>Laporan</a>
                                </li>
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
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dispantph</a></li>
                                            <li class="breadcrumb-item active"><a href="javascript: void(0);">Home</a></li>
                                        </ol>
                                    </div>
                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-14">
                                    <center>
                                        <h3 class="m-0">Selamat datang di Sistem Klasifikasi Uji Kondisi Kelayakan pada Kendaraan Bermotor</h3>
                                    </center>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                       
                   
                           

                     
                

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

        <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
            <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
        </a>

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

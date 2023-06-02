
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 09:02:23 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Klasifikasi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('template/images/favicon.ico') }}">

        <link href="{{ asset('template/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
        <link href="{{ asset('template/libs/switchery/switchery.min.css" rel="stylesheet') }}" type="text/css" />
        <link href="{{ asset('template/libs/select2/select2.min.css" rel="stylesheet') }}" type="text/css" />
        <link href="{{ asset('template/libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />

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
                                    <span class="pro-user-name ml-1"> Hai, 
                                    {{ Auth::user()->name }}  <i class="mdi mdi-chevron-down"></i> 
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
                
                            <li class="d-none d-sm-block">
                                <form class="app-search">
                                    <div class="app-search-box">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
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
                                    <a href="{{ route('home') }}"> <i class="fe-airplay"></i>Home</a>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Advanced</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">silahkan Isi data Klasifikasi</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-6">

                            <form action="{{ route('simpan-klasifikasi') }}" method="post" enctype="multipart/form-data">
                             {{csrf_field() }}
                                <div class="card-box">
                                    <h4 class="header-title">Input Data Uji</h4>
                                    <label class="mb-1 mt-3 text-muted">Jenis Kendaraan</label>
                            
                                    <select class="selectpicker" data-style="btn-outline-primary">
                                        <option>Roda 2</option>
                                        <option>Roda 4</option>
                                    </select>

                                    <label class="mb-1 mt-3 text-muted">Tahun Pembuatan</label>
                                    <select class="selectpicker" data-style="btn-outline-primary">
                                        <option>2010 Kebawah</option>
                                        <option>2010 Keatas</option>
                                    </select>

                                    <label class="mb-1 mt-3 text-muted">Bahan Bakar</label>
                                    <select class="selectpicker" data-style="btn-outline-primary">
                                        <option>Dexlite</option>
                                        <option>Pertamax</option>
                                    </select>

                                    <label class="mb-1 mt-3 text-muted">Komponen Mesin</label>
                                    <select class="selectpicker" data-style="btn-outline-primary">
                                        <option>Baik</option>
                                        <option>Sedang</option>
                                        <option>Buruk</option>
                                    </select>

                                    <label class="mb-1 mt-3 text-muted">Ban Kendaraan</label>
                                    <select class="selectpicker" data-style="btn-outline-primary">
                                        <option>Baik</option>
                                        <option>Sedang</option>
                                        <option>Buruk</option>
                                    </select>

                                    <label class="mb-1 mt-3 text-muted">lampu utama</label>
                                    <select class="selectpicker" data-style="btn-outline-primary">
                                        <option>Baik</option>
                                        <option>Sedang</option>
                                        <option>Buruk</option>
                                    </select>

                                    <label class="mb-1 mt-3 text-muted">Kondisi Rem</label>
                                    <select class="selectpicker" data-style="btn-outline-primary">
                                        <option>Baik</option>
                                        <option>Sedang</option>
                                        <option>Buruk</option>
                                    </select>

                                            <button type="submit" class="btn btn-primary waves-effect width-md waves-light">Klasifikasi</button> 
                                     </form>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">

                                        <table id="datatable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Tahun Pembuatan</th>
                                                <th>Bahan Bakar</th>
                                                <th>Komponen Mesin</th>
                                                <th>Ban Kendaraan</th>
                                                <th>Lampu Utama</th>
                                                <th>Kondisi Rem</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                            @foreach ($klasifikasi as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->dataken->jenis_kendaraan }}</td>
                                                <td>{{ $item->dataken->tahun_pembuatan }}</td>
                                                <td>{{ $item->bahan_bakar}}</td>
                                                <td>{{ $item->komponen_mesin}}</td>
                                                <td>{{ $item->ban_kendaraan}}</td>
                                                <td>{{ $item->lampu_utama}}</td>
                                                <td>{{ $item->kondisi_rem}}</td>
                                                <td>

                                                <center>
                                                    <a href="{{ url('edit-klasifikasi', $item->id) }}"><i class="fas fa-edit"></i></a>
                                                    |
                                                    <a href="{{ url('delete-klasifikasi', $item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                                                </center>
                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
 
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
                        <!-- end row -->

                                    
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2023 &copy; DISPANTPH<a href="#">Coderthemes</a>
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
                        <img src="{{ asset('template/images/layouts/rtl.png') }}" class="img-fluid img-thumbnail" alt="">
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

        <script src="{{ asset('template/libs/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('template/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ asset('template/libs/select2/select2.min.js') }}"></script>
        <script src="{{ asset('template/libs/jquery-mockjax/jquery.mockjax.min.js') }}"></script>
        <script src="{{ asset('template/libs/autocomplete/jquery.autocomplete.min.js') }}"></script>
        <script src="{{ asset('template/libs/bootstrap-select/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('template/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
        <script src="{{ asset('template/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
        <script src="{{ asset('template/libs/bootstrap-filestyle2/bootstrap-filestyle.min.js') }}"></script>

        <!-- Init js-->
        <script src="{{ asset('template/js/pages/form-advanced.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('template/js/app.min.js') }}"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 09:02:27 GMT -->
</html>
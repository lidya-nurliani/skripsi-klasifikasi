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
    <link href="{{ asset('template/libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('template/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- App css -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <link href="{{ asset('template/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

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
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                                data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <img src="{{ asset('template/images/users/user1.png') }}" alt="user-image"
                                    class="rounded-circle">
                                <span class="pro-user-name ml-1"> Hai,
                                    {{ Auth::user()->name }} !<i class="mdi mdi-chevron-down"></i>
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
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <i class="fe-log-out"></i><span>Logout</span>
                                </a>

                            </div>
                        </li>

                      
                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">

                        <a href="index.html" class="logo text-center logo-dark">
                            <span class="logo-lg">
                                <img src="{{ asset('template/images/logo-dinas.png') }}" alt="" height="64">
                                <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">A</span> -->
                                <img src="{{ asset('template/images/logo-dinas.png') }}" alt="" height="64">
                            </span>
                        </a>

                      
                    </div>

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
                                    <i class="fe-box"></i>Data Training/testing</a>

                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('prediksi') }}">
                                    <i class="fe-box"></i>
                                Klasifikasi</a>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">DISPANTPH</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Klasifikasi</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Klasifikasi Data Kendaraan</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <h4 class="header-title mb-4">Form Klasifikasi</h4>
                                <form action="{{ route('prediksi.hasil') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Jenis Kendaraan</label>
                                        <select class="form-control" name="dataken_id" >
                                            <option value="">Pilih Jenis Kendaraan</option>
                                            @foreach ($dataken as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->merk_kendaraan." | ".$item->jenis_kendaraan."(".$item->tahun_pembuatan.") - ".$item->no_polisi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Bahan Bakar</label>
                                        <select name="bahan_bakar" class="form-control">
                                            <option value="">Pilih jenis bahan bakar</option>
                                            <option value="Dexlite">Dexlite</option>
                                            <option value="Pertamax">Pertamax</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Komponen Mesin</label>
                                        <select name="komponen_mesin" class="form-control">
                                            <option value="">Pilih Kondisi Komponen mesin</option>
                                            <option value="Baik">Baik</option>
                                            <option value="Sedang">Sedang</option>
                                            <option value="Buruk">Buruk</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Ban Kendaraan</label>
                                        <select name="ban" class="form-control">
                                            <option value="">Pilih Kondisi Ban</option>
                                            <option value="Baik">Baik</option>
                                            <option value="Sedang">Sedang</option>
                                            <option value="Buruk">Buruk</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Lampu Utama</label>
                                        <select name="lampu_utama" class="form-control">
                                            <option value="">Pilih Kondisi Lampu</option>
                                            <option value="Baik">Baik</option>
                                            <option value="Sedang">Sedang</option>
                                            <option value="Buruk">Buruk</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kondisi Rem</label>
                                        <select name="kondisi_rem" class="form-control">
                                            <option value="">Pilih Kondisi Rem</option>
                                            <option value="Baik">Baik</option>
                                            <option value="Sedang">Sedang</option>
                                            <option value="Buruk">Buruk</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Klasifikasi</button>
                                </form>
                            </div>
                        </div>
                        <!-- end col -->
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

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

   
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

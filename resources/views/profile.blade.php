<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 09:02:03 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Profil saya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('template/images/favicon.ico') }}">

    <!-- third party css -->
    <link href="{{ asset('template/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('template/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <link href="{{ asset('template/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

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
                                
                                <img src="{{ asset('template/images/users/user1.png') }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    Hai {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
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
                        <a href="#" class="logo text-center logo-light">
                            <span class="logo-lg">
                                <img src="{{ asset('template/images/logodinas.png') }}" alt="" height="30">
                                <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                            </span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->




            <div class="topbar-menu bg-primary">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{ route('home') }}" class="text-white"> <i class="fe-home"></i>Home</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('index-dataken') }}" class="text-white">
                                    <i class="fe-database"></i>Data Kendaraan
                                </a>

                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('create-klasifikasi') }}" class="text-white">
                                    <i class="far fa-file-alt"></i>Data training/testing</a>

                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('prediksi') }}" class="text-white">
                                    <i class="fe-box"></i>Klasifikasi</a>

                            </li>
                            @role('Admin')
                            <li class="has-submenu">
                                <a href="#" class="text-white"> <i class="fe-airplay"></i>Data Master</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('merk.index') }}"> Merk Kendaraan</a></li>
                                        <li><a href="{{ route('jenis.index') }}">Jenis Kendaraan</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="{{ route('data-user') }}" class="text-white">
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

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Profil</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Profil</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="profile-bg-picture"
                                style="background-image:url('{{ asset('template/images/bg-profile.png') }}')">
                                <span class="picture-bg-overlay"></span><!-- overlay -->
                            </div>
                            <!-- meta -->
                            <div class="profile-user-box">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <span class="float-left mr-3"><img src="{{ asset('template/images/users/user1.png') }}" alt=""
                                                class="avatar-xl rounded-circle"></span>
                                        <div class="media-body">
                                            
                                            <h4 class="mt-1 mb-1 font-18 ellipsis">{{ Auth::user()->name }}</h4>
                                            <p class="font-13">{{ Auth::user()->email }}</p>
                                            <p class="text-muted mb-0"><small>Level : {{ auth()->user()->roles->pluck('name')[0] ?? '' }}</small></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        {{-- <div class="text-right">
                                            <button type="button" class="btn btn-success waves-effect waves-light">
                                                <i class="mdi mdi-account-settings-variant mr-1"></i> Edit Profile
                                            </button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-12">

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                            <div class="card-box">
                                <h4 class="header-title mt-0 mb-4">Edit Profil</h4>
                                <form action="{{ route('update-profile', ['id' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="password_lama">Password Lama</label>
                                    <input type="password" name="password_lama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password_baru">Password Baru</label>
                                    <input type="password" name="password_baru" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password_baru_confirmation">Konfirmasi Password Baru</label>
                                    <input type="password" name="password_baru_confirmation" class="form-control">
                                </div>
                                
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>

                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->


                </div> <!-- end container-fluid -->

            </div> <!-- end content -->



            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        2023 DISPANTPH <a href="#">Coderthemes</a>
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

    <!-- Required datatable js -->
    <script src="{{ asset('template/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('template/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('template/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('template/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('template/libs/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('template/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('template/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('template/libs/datatables/buttons.colVis.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('template/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('template/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatables init -->
    <script src="{{ asset('template/js/pages/datatables.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('template/js/app.min.js') }}"></script>

</body>

<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 09:02:09 GMT -->

</html>

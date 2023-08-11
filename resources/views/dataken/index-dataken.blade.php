
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 09:02:03 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Data kendaraan DISPANTPH</title>
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

                                    <div class="dropdown-divider"></div>

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
                                    <a href="{{ route('home') }}" class="text-white">  <i class="fe-home"></i>Home</a>
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
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">DISPANTPH</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">index</a></li>
                                            <li class="breadcrumb-item active">dataken</li>
                                        </ol>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title">
                                            @role('Admin')
                                            iNPUT
                                            @endrole
                                            DATA KENDARAAN
                                        </h4>
                                        <p class="sub-header">
                                            Silahkan Isi data Terlebih dahulu.
                                        </p>

                                                {{-- notifikasi form validasi --}}
                                                @if ($errors->has('file'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('file') }}</strong>
                                                </span>
                                                @endif
                                        
                                                {{-- notifikasi sukses --}}
                                                @if ($sukses = Session::get('sukses'))
                                                <div class="alert alert-success alert-block">
                                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                                    <strong>{{ $sukses }}</strong>
                                                </div>
                                                @endif
                                        
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                        @role('Admin')
                                        <a href="{{ route('create-dataken') }}">
                                        <button type="button" class="btn btn-success waves-effect waves-light btn-md"><i class="fe-plus-square"></i>Tambah Data</button></a>
                                      
                                       
                                        <a href="{{ route('export') }}">
                                        <button type="button" class="btn btn-info waves-effect waves-light btn-md"><i class="fas fa-file-export"></i>Export</button></a>
                 
                                        <button type="button" class="btn btn-primary waves-effect waves-light btn-md" data-toggle="modal" data-target="#import"><i class="fas fa-file-import"></i>Import</button>
                                        @endrole
                                            </div>
                                        </div>
                                    </div>

                                        
                                                <!-- Import Excel -->
                                                <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <form method="post" action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                                                </div>
                                                                <div class="modal-body">
                                        
                                                                    {{ csrf_field() }}
                                        
                                                                    <label>Pilih file excel</label>
                                                                    <div class="form-group">
                                                                        <input type="file" name="file" required="required">
                                                                    </div>

                                                                    <br>
                                                                    <label>download format disini -> </label>
                                                                    <a href="{{ asset('template-excel.xlsx') }}" class="">download template</a>
                                        
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Import</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
 

                                        <table id="datatable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Merk Kendaraan</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Tahun Pembuatan</th>
                                                <th>No Polisi</th>
                                                <th>No Mesin</th>
                                                <th>No Rangka</th>
                                                @role('Admin')
                                                <th>Aksi</th>
                                                @endrole
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                            @foreach ($dataken as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->merk_kendaraan}}</td>
                                                <td>{{ $item->jenis_kendaraan}}</td>
                                                <td>{{ $item->tahun_pembuatan}}</td>
                                                <td>{{ $item->no_polisi}}</td>
                                                <td>{{ $item->no_mesin}}</td>
                                                <td>{{ $item->no_rangka}}</td>
                                                @role('Admin')
                                                <td>
                                                <center>
                                                    <a href="{{ url('edit-dataken', $item->id) }}"><i class="fas fa-edit"></i></a>
                                                    |
                                                    <a href="{{ url('delete-dataken', $item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                                                </center>
                                                </td>
                                                @endrole
                                        </tr>
                                        @endforeach
                                    </tbody>
 
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->
    
    
                          
                                           
                                            
                                      
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
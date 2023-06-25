<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>prediksi</title>
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
                                <span class="pro-user-name ml-1">
                                    Hai, {{ Auth::user()->name }} ! <i class="mdi mdi-chevron-down"></i>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">DISPANTPH</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">hasil</a></li>
                                        <li class="breadcrumb-item active">klasifikasi</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                        
                    <div class="row">
                        <div class="col-12">
                                @if($decisionTreeController->predictFinalClass($dataToPredict, $decisionTree) == 'Layak')
                                    <div class="alert alert-icon alert-success text-success alert-dismissible fade show" role="alert">
                                    <h4><i class="mdi mdi-check-all mr-2"></i>Hasil Klasifikasi adalah <strong>Layak</strong></h4>
                                    </div>
                                @else
                                    <div class="alert alert-icon alert-danger text-danger alert-dismissible fade show" role="alert">
                                        <h4><i class="mdi mdi-alert mr-2"></i>
                                        Hasil Klasifikasi adalah <strong>Tidak Layak</strong></h4>
                                    </div>
                                @endif
                        </div>
                    </div> <!-- end row -->

                        <div class="card">
                            <div class="card-body">
                            <h4 class="page-title pull-left">Data Rincian Klasifikasi</h4>
                            <form action="{{ route('cetakLaporanPDF') }}" method="post" target="_blank">
                                @csrf
                                <input type="hidden" name="merk_kendaraan" value="{{ $getDataKen->merk_kendaraan }}">
                                <input type="hidden" name="no_polisi" value="{{ $getDataKen->no_polisi }}">
                                @foreach ($dataToPredict as $attribute => $value) 
                                <input type="hidden" name="{{ $attribute }}" value="{{ $value }}"> 
                                @endforeach
                                <button type="submit" class="btn btn-icon waves-effect btn-danger justify"> <i class="far fa-file-pdf"></i> Cetak</button><br><br>
                            </form>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Kendaraan</th>
                                        <td>{{ $getDataKen->merk_kendaraan }}</td>
                                    </tr>
                                    <tr>
                                        <th>No Polisi</th>
                                        <td>{{ $getDataKen->no_polisi }}</td>
                                    </tr>
                                    @foreach ($dataToPredict as $attribute => $value)
                                    <tr>
                                        <th>{{ $attribute }}</th>
                                        <td>{{ $value }}</td>
                                    </tr>
                                    @endforeach
                                </table>
                                <br>
                                <h5>HASIL KEPUTUSAN : {{ $decisionTreeController->predictFinalClass($dataToPredict, $decisionTree) }}</h5>
                                <div class="single-table">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                  


                    <div class="row">
                        <div class="col-12">
                            <div class="card-box table-responsive">
                                <h4 class="header-title">DATA Testing</h4>

                                <table class="table table-bordered  dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Kendaraan</th>
                                            <th>Jenis Kendaraan</th>
                                            <th>Tahun Pembuatan</th>
                                            <th>Bahan Bakar</th>
                                            <th>Komponen Mesin</th>
                                            <th>Ban</th>
                                            <th>Lampu Utama</th>
                                            <th>Kondisi Rem</th>
                                            <th>Kelayakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($klasifikasi as $data)
                                        <tr>
                                            <td>{{ $data->dataken->merk_kendaraan }} <br>No Polisi : {{ $data->dataken->no_polisi }} <br>No Rangka : {{ $data->dataken->no_rangka }}</td>
                                            <td>{{ $data->jenis_kendaraan }}</td>
                                            <td>{{ $data->tahun_pembuatan }}</td>
                                            <td>{{ $data->bahan_bakar }}</td>
                                            <td>{{ $data->komponen_mesin }}</td>
                                            <td>{{ $data->ban }}</td>
                                            <td>{{ $data->lampu_utama }}</td>
                                            <td>{{ $data->kondisi_rem }}</td>
                                            <td>{{ $data->kelayakan }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box table-responsive">
                                <h4 class="header-title">DATA Entropy dan Gain</h4>

                                <table class="table table-bordered  dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Atribut</th>
                                            <th>Value</th>
                                            <th>Jumlah Kasus</th>
                                            <th>Layak</th>
                                            <th>Tidak Layak</th>
                                            <th>Entropy</th>
                                            <th>Gain</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attributeInformation as $attribute => $information)
                                            <tr>
                                                <td rowspan="{{ count($information['values']) + 1 }}">{{ $attribute }}</td>
                                                @foreach ($information['values'] as $value)
                                                    <tr>
                                                        <td>{{ $value['value'] }}</td>
                                                        <td>{{ $value['count'] }}</td>
                                                        <td>{{ $value['positiveCount'] }}</td>
                                                        <td>{{ $value['negativeCount'] }}</td>
                                                        <td>{{ $value['entropy'] }}</td>
                                                        <td></td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td>Total</td>
                                                    <td>{{ $information['totalInstances'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>{{ $information['attributeGain'] }}</td>
                                                </tr>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box table-responsive">
                                <h4 class="header-title">Pohon Keputusan</h4>

                                @php
                                    function printDecisionTree($tree, $indent = 0)
                                    {
                                        echo "<ul>";
                                        if (isset($tree['label'])) {
                                            echo str_repeat("  ", $indent);
                                            echo "|--" . $tree['label'] . "\n";
                                        } else {
                                            echo str_repeat("  ", $indent);
                                            echo "# " . $tree['attribute'] . "\n";
                                            foreach ($tree['children'] as $value => $child) {
                                                echo str_repeat("  ", $indent + 1);
                                                echo "|_" . "" . $value . "\n";
                                                printDecisionTree($child, $indent + 2);
                                            }
                                        }
                                        echo "</ul>";
                                    }
                                @endphp

                                <pre>
                                    @php
                                        printDecisionTree($decisionTree);
                                    @endphp
                                </pre>

                              
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

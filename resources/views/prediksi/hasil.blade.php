@extends('layouts.app')

@section('content')
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
                <div class="alert alert-icon alert-success text-success alert-dismissible fade show"
                    role="alert">
                    <h4 class="text-dark"><i class="mdi mdi-check-all mr-2"></i>Hasil Klasifikasi adalah
                        <strong>Layak</strong></h4>
                </div>
                @else
                <div class="alert alert-icon alert-danger text-danger alert-dismissible fade show"
                    role="alert">
                    <h4 class="text-dark"><i class="mdi mdi-alert mr-2"></i>
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
                    <input type="hidden" name="merk_kendaraan" value="{{ $getDataKen->merk->merk }}">
                    <input type="hidden" name="no_polisi" value="{{ $getDataKen->no_polisi }}">
                    @foreach ($dataToPredict as $attribute => $value)
                    <input type="hidden" name="{{ $attribute }}" value="{{ $value }}">
                    @endforeach

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-icon waves-effect btn-danger justify">
                                    <i class="far fa-file-pdf"></i> Cetak</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{ route('detailPerhitungan') }}" method="post">
                    @csrf
                    <input type="hidden" name="merk_kendaraan" value="{{ $getDataKen->merk->merk }}">
                    <input type="hidden" name="no_polisi" value="{{ $getDataKen->no_polisi }}">
                    @foreach ($dataToPredict as $attribute => $value)
                    <input type="hidden" name="{{ $attribute }}" value="{{ $value }}">
                    @endforeach
                    <button type="submit" class="btn btn-secondary waves-effect waves-light btn-md">
                        <i class="fas fa-file-export"></i>Detail Perhitungan
                    </button>
                </form>
                <br>
                <table class="table table-bordered">
                    <tr>
                        <th>Kendaraan</th>
                        <td>{{ $getDataKen->merk->merk }}</td>
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
                <h5>HASIL KEPUTUSAN :
                    {{ $decisionTreeController->predictFinalClass($dataToPredict, $decisionTree) }}</h5>

                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end container-fluid -->

</div> <!-- end content -->
@endsection
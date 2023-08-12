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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">create</a></li>
                            <li class="breadcrumb-item active">Jenis Kendaraan</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="content">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h3>Tambah Data Jenis Kendaraan</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('jenis.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label>Jenis Kendaraan</label>
                            <input type="text" id="jenis_kendaraan" name="jenis_kendaraan"
                                class="form-control @error('jenis_kendaraan') is-invalid @enderror"
                                placeholder="masukkan jenis kendaraan">
                            @error('jenis_kendaraan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-info waves-effect waves-light"
                                data-toggle="modal" data-target="#konfirmasi">Simpan</button>
                        </div>

                        <!-- Signup modal content -->
                        <div id="konfirmasi" class="modal fade" tabindex="-1" role="dialog"
                            aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-body p-3">
                                        <div class="text-center mb-3">
                                            <a href="index.html">
                                                <img src="assets/images/logo-dark.png" alt="" height="30">
                                            </a>
                                        </div>

                                        <form class="form-horizontal" action="#">

                                            <center>
                                                <p>Apakah anda yakin menambah data ?</p>
                                            </center><br>

                                            <div class="form-group account-btn row text-center mb-0">
                                                <div class="col-12">
                                                    <button
                                                        class="btn width-lg btn-rounded btn-lg btn-primary waves-effect waves-light"
                                                        type="submit">Yakin</button>
                                                    <button
                                                        class="btn width-lg btn-rounded btn-lg btn-danger waves-effect waves-light"
                                                        data-dismiss="modal" type="button">Tidak</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </form>
                </div>
            </div>
        </div><!-- end row -->
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div> <!-- end content -->
@endsection
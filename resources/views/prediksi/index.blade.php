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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Form</a></li>
                            <li class="breadcrumb-item active">Klasifikasi</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- Bagian Form Klasifikasi -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title mb-4">Form Klasifikasi</h4>
                    <form action="{{ route('prediksi.hasil') }}" method="post">
                        @csrf

                        <div class="row justify-content-md-center">
                            <div class="col-6">
                            <label for="dataken_id">jenis kendaraan</label>
                            <select name="dataken_id" id="dataken_id" class="form-control @error('dataken_id') is-invalid @enderror">
                                <option value="">pilih data kendaraan</option>
                                @foreach ($dataken as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->merk->merk." | ".$item->jenis->jenis_kendaraan."(".$item->tahun_pembuatan.") - ".$item->no_polisi }}
                                </option>
                                @endforeach
                            </select>
                            @error('dataken_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-6">
                            <label>Bahan Bakar</label>
                            <select name="bahan_bakar" class="form-control @error('bahan_bakar') is-invalid @enderror">
                                <option value="">Pilih jenis bahan bakar</option>
                                <option value="Dexlite">Dexlite</option>
                                <option value="Pertamax">Pertamax</option>
                            </select>
                            @error('bahan_bakar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-6">
                            <label>Komponen Mesin</label>
                            <select name="komponen_mesin" class="form-control @error('komponen_mesin') is-invalid @enderror">
                                <option value="">Pilih Kondisi Komponen mesin</option>
                                <option value="Baik">Baik</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Buruk">Buruk</option>
                            </select>
                            @error('komponen_mesin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                       <div class="col-6">
                            <label>Ban Kendaraan</label>
                            <select name="ban" class="form-control @error('ban') is-invalid @enderror">
                                <option value="">Pilih Kondisi Ban</option>
                                <option value="Baik">Baik</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Buruk">Buruk</option>
                            </select>
                            @error('ban')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-6">
                            <label>Lampu Utama</label>
                            <select name="lampu_utama" class="form-control @error('lampu_utama') is-invalid @enderror">
                                <option value="">Pilih Kondisi Lampu</option>
                                <option value="Baik">Baik</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Buruk">Buruk</option>
                            </select>
                            @error('lampu_utama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                       <div class="col-6">
                            <label>Kondisi Rem</label>
                            <select name="kondisi_rem" class="form-control @error('kondisi_rem') is-invalid @enderror">
                                <option value="">Pilih Kondisi Rem</option>
                                <option value="Baik">Baik</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Buruk">Buruk</option>
                            </select>
                            @error('kondisi_rem')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        </div>
                        <br>
                        <button type="button" data-toggle="modal" data-target="#konfirmasi" class="btn btn-primary">Klasifikasi</button>

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

                                            <center>
                                                <p>Apakah anda yakin untuk melakukan prediksi ?</p>
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

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </form>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
    <!-- end row -->
</div> <!-- end card-box -->
@endsection

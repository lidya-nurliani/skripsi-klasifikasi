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
                            <li class="breadcrumb-item active">data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        @include('layouts.alert')

        <div class="row">
            @role('Admin')
            <div class="col-md-6">
                <div class="card-box">

                    <h4 class="header-title mb-4">Form data training/testing</h4>

                    <form action="{{ route('simpan-klasifikasi') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field() }}

                        <div class="form-group">
                            <label>Jenis Kendaraan</label>
                            <select name="dataken_id" class="form-control @error('dataken_id') is-invalid @enderror">
                                <option value="">Pilih jenis kendaran</option>
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


                        <div class="form-group">
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

                        <div class="form-group">
                            <label>Komponen Mesin</label>
                            <select name="komponen_mesin"
                                class="form-control @error('komponen_mesin') is-invalid @enderror">
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
                        <div class="form-group">
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
                        <div class="form-group">
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
                        <div class="form-group">
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
                        <div class="form-group">
                            <label>Kelayakan</label>
                            <select name="kelayakan" class="form-control @error('kelayakan') is-invalid @enderror">
                                <option value="">Pilih Kelayakan</option>
                                <option value="Layak">Layak</option>
                                <option value="Tidak Layak">Tidak Layak</option>
                            </select>
                            @error('kelayakan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="button" data-toggle="modal" data-target="#konfirmasi" class="btn btn-primary">Simpan</button>
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

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </form>
                </div>
            </div>
            <!-- end col -->
            @endrole

            <div class="col-md-6">

                <div class="col-md-12">

                    <div class="card-box">
                        <h4 class="header-title mb-4">Data </h4>

                        <div class="card-box table-responsive">

                            <table id="datatable" class="table table-bordered  dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kendaraan</th>
                                        <th>Jenis Kendaraan</th>
                                        <th>Tahun Pembuatan</th>
                                        <th>Bahan Bakar</th>
                                        <th>Komponen Mesin</th>
                                        <th>Ban Kendaraan</th>
                                        <th>Lampu Utama</th>
                                        <th>Kondisi Rem</th>
                                        <th>Kelayakan</th>
                                        @role('Admin')
                                        <th>Aksi</th>
                                        @endrole
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($klasifikasi as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->dataken->merk->merk }}</td>
                                        <td>{{ $item->dataken->jenis->jenis_kendaraan." (".$item->dataken->tahun_pembuatan.")" }}
                                        </td>
                                        <td>{{ $item->tahun_pembuatan }}</td>
                                        <td>{{ $item->bahan_bakar}}</td>
                                        <td>{{ $item->komponen_mesin}}</td>
                                        <td>{{ $item->ban}}</td>
                                        <td>{{ $item->lampu_utama}}</td>
                                        <td>{{ $item->kondisi_rem}}</td>
                                        <td>{{ $item->kelayakan}}</td>
                                        @role('Admin')
                                        <td>
                                            <center>
                                                <a href="{{ url('edit-klasifikasi', $item->id) }}"><i
                                                        class="fas fa-edit"></i></a>
                                                |
                                                <a href="#" data-toggle="modal" data-target="#delete{{ $item->id }}"><i
                                                        class="fas fa-trash-alt" style="color: red"></i></a>
                                                <div id="delete{{ $item->id }}" class="modal fade" tabindex="-1"
                                                    role="dialog" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body p-3">
                                                                <center>
                                                                    <p>Apakah anda yakin menghapus data ?</p>
                                                                </center><br>
                                                                <div
                                                                    class="form-group account-btn row text-center mb-0">
                                                                    <div class="col-12">
                                                                        <form
                                                                            action="{{ route('delete-klasifikasi', $item->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button
                                                                                class="btn width-lg btn-rounded btn-lg btn-primary waves-effect waves-light"
                                                                                type="submit">Yakin</button>
                                                                            <button
                                                                                class="btn width-lg btn-rounded btn-lg btn-danger waves-effect waves-light"
                                                                                data-dismiss="modal"
                                                                                type="button">Tidak</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </center>
                                        </td>
                                        @endrole
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div> <!-- end card-box -->
    @endsection

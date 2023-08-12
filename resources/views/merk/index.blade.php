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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">index</a></li>
                            <li class="breadcrumb-item active">Merk</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">

                    @include('layouts.alert')

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="mt-1 mb-1 font-18 ellipsis">Data Merk</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-right">
                                            <a href="{{ route('merk.create') }}"> <button type="button" class="btn btn-success waves-effect waves-light btn-md"><i class="fe-plus-square"></i>Tambah Data</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table id="datatable" class="table table-bordered  dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merk Kendaraan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($merk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->merk }}</td>
                                <td>
                                    <center>
                                        <a href="{{ route('merk.edit', $item->id) }}"><i class="fas fa-edit"></i></a>
                                        |
                                        <a href="#" data-toggle="modal" data-target="#delete{{ $item->id }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                                        <div id="delete{{ $item->id }}" class="modal fade" tabindex="-1" role="dialog"
                                            aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body p-3">
                                                            <center>
                                                                <p>Apakah anda yakin menghapus data ?</p>
                                                            </center><br>
                                                            <div class="form-group account-btn row text-center mb-0">
                                                                <div class="col-12">
                                                                    <form action="{{ route('merk.destroy', $item->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button
                                                                        class="btn width-lg btn-rounded btn-lg btn-primary waves-effect waves-light"
                                                                        type="submit">Yakin</button>
                                                                        <button
                                                                        class="btn width-lg btn-rounded btn-lg btn-danger waves-effect waves-light"
                                                                        data-dismiss="modal" type="button">Tidak</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    </center>
                                </td>
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
@endsection

@extends('layout.layout')
@section('content')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $title }}</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">{{ $title }}</h4>
                            <a class="btn btn-primary btn-sm btn-round ml-auto" href="/transaksi/create">
                                <i class="fa fa-plus"></i>
                                Tambah Data
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Transaksi</th>
                                        <th>Tanggal</th>
                                        <th>Total Bayar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data_transaksi as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->no_transaksi }}</td>
                                        <td>{{ date('d/M/Y', strtotime($row->tgl_transaksi)) }}</td>
                                        <td>Rp. {{ number_format($row->total_bayar) }}</td>
                                        <td>
                                        <a href="{{ route('detail-transaksi',$row->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i> Detail </a>                                
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Hapus</a>
                                        <a href="{{ route('cetak-transaksi',$row->id) }}" class="btn btn-xs btn-secondary"><i class="fa fa-print"></i> Cetak </a> 
                                                                               
               <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Transaksi</h1>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                            <div class="modal-body">
                                                 Apakah Anda Ingin Menghapus Data Ini ? 
                                            </div>
                                                <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('delete-transaksi',$row->id) }}" method="get">
                                        @csrf @method('delete')
                                     <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Hapus</button>                                                                                 
                                </form>          
                            </div>
                        </div>
                    </div>
                </div>                                      
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

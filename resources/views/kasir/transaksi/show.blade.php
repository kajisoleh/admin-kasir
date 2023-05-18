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
                    <form method="POST" action="/transaksi/store">
                    @csrf
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">{{ $title }}</h4>
                        </div>
                        <hr/>

                        <a href="/transaksi" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i>
                           Kembali
                        </a>
                        <hr/>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No Transaksi</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Subtotal</th>
                                    <th>Diskon</th>
                                    <th>Kembalian</th>
                                    <th>Uang Pembeli</th>
                                    <th>Total Bayar</th>
                                </tr>  
                                <tr>
                                    <td>{{ $detail_transaksi->no_transaksi }}</td>                          
                                    <td>{{ date('d/M/Y', strtotime($detail_transaksi->tgl_transaksi)) }}</td>
                                    <td>Rp. {{ number_format($detail_transaksi->subtotal) }}</td>
                                    <td>Rp. {{ number_format($detail_transaksi->diskon) }}</td>
                                    <td>Rp. {{ number_format($detail_transaksi->kembalian) }}</td>
                                    <td>Rp. {{ number_format($detail_transaksi->uang_pembeli) }}</td>
                                    <td>Rp. {{ number_format($detail_transaksi->total_bayar) }}</td>
                                </tr>
                            </table>
                        </div>             
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
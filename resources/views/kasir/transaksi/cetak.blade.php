@extends('layout.invoice')
@section('content')

    <div class="container">       
                <div class="card">
                    <div class="card-body mx-4">
                        <div class="container">
                            <p class="my-5 " style="font-size: 30px;">TERIMA KASIH<br>
                                TELAH BERBELANJA DI TOKO KAMI
                            </p>
                            <div class="row">
                                <ul class="list-unstyled">
                                    <li class="text-black">{{ auth()->user()->name }}</li>
                                    <li class="text-muted mt-1"><span class="text-black">No. Transaksi:</span> {{ $cetak_transaksi->no_transaksi }}</li>
                                    <li class="text-black mt-1">Tanggal: {{ $cetak_transaksi->tgl_transaksi }}</li>
                                </ul>
                                <hr style="border-color:black">
                                <div class="col-xl-10">
                                    <p>Subtotal</p>
                                </div>                                                                               
                                <div class="col-xl-2">
                                    <p class="float-end">{{ number_format($cetak_transaksi->subtotal) }}
                                    </p>
                                </div>
                                <hr style="border-color:black">
                                <div class="col-xl-10">
                                    <p>Diskon</p>
                                </div>                                                                               
                                <div class="col-xl-2">
                                    <p class="float-end">{{ number_format($cetak_transaksi->diskon) }}
                                    </p>
                                </div>
                                <hr style="border-color:black">
                            </div>
                            <div class="row">
                                <div class="col-xl-10">
                                    <p>Kembalian</p>
                                </div>
                                <div class="col-xl-2">
                                    <p class="float-end">{{ number_format($cetak_transaksi->kembalian) }}
                                    </p>
                                </div>
                                <hr style="border-color:black">
                            </div>
                            <div class="row">
                                <div class="col-xl-10">
                                    <p>Uang Pembeli</p>
                                </div>
                                <div class="col-xl-2">
                                    <p class="float-end">{{ number_format($cetak_transaksi->uang_pembeli) }}
                                    </p>
                                </div>
                                <hr style="border: 2px solid black;">
                            </div>
                            <div class="row text-black">

                                <div class="col-xl-12">
                                    <p class="float-end fw-bold">Total Bayar : Rp.{{ number_format ($cetak_transaksi->total_bayar) }}
                                    </p>
                                </div>
                                <hr style="border: 2px solid black;">
                            </div>
                            <div class="text-center" style="margin-top: 90px;">
                                <a><u class="text-info"> LAPAK GAMING </u></a>
                                <p>Since 2023</p>
                            </div>

                        </div>
                    </div>
            </div>         
    </div>

@push('print')
    <script>
        window.print();
    </script>
@endpush
@endsection

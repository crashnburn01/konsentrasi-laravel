@extends('layout.index')

@section('container')
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    
                    <!-- data table end -->
                    <!-- Primary table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Riwayat Pemesanan</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" style="width:100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Tanggal Pemesanan</th>
                                                <th>ID Pemesanan</th>
                                                <th>Nama Kustomer</th>
                                                <th>Alamat</th>
                                                <th>No. Telp</th>
                                                <th>Pembayaran</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $key => $p)
                                            <tr>
                                                <td>{{$p->tglorder}}</td>
                                                <td><strong><a href="#">#{{$p->orderid}}</a></strong></td>
                                                <td>{{$p->namalengkap}}</td>
                                                <td>{{$p->alamat}}</td>
                                                <td>{{$p->notelp}}</td>
                                                
                                                <td>Rp{{$p->count}}</td>

                                                <td>Selesai</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primary table end -->
                    
                    <!-- Dark table start -->
                    
                    <!-- Dark table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->

@endsection
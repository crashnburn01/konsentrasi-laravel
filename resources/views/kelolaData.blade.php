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
                                <h4 class="header-title">Daftar Pesanan</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" style="width:100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>#</th>
                                                <th>ID Pemesanan</th>
                                                <th>Nama Customer</th>
                                                <th>Tanggal Order</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $key => $p)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><strong><a href="#">#{{ $p->orderid }}</a></strong></td>
                                                <td>{{ $p->namalengkap }}</td>
                                                <td>{{ $p->tglorder }}</td>
                                                <td>Rp {{ $p->count }}</td>
                                                <td>{{ $p->status }}</td>
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
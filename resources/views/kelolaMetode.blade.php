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
                                <h4 class="header-title">Daftar Metode Pembayaran</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" style="width:100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Metode</th>
                                                <th>No. Rek</th>
                                                <th>Atas Nama</th>
                                                <th>Logo URL</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=1; @endphp
                                            @foreach($data as $row)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{$row->metode}}</td>
                                                <td>{{$row->norek}}</td>
                                                <td>{{$row->an}}</td>
                                                <td>{{$row->logo}}</td>
                                                <th>
                                                    <a href="{{url('metode').'/' .$row->no. '/edit'}}" class="btn btn-rounded btn-success sm-10">UBAH</a> 
                                                    <a href="{{url('metode').'/' .$row->no. '/hapus'}}" class="btn btn-rounded btn-danger sm-10" onclick="return confirm('Yakin?');" >HAPUS</a>

                                                    <!-- syntax href ubah: edit-ketegori.php?idkategori=< ?= $p["idkategori"];?> -->
                                                    <!-- syntax href hapus: edit-ketegori.php?idkategori=< ?= $p["idkategori"];?> -->
                                                </th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <form action="" method="post" class="form-material">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a href="/metode/create" class="btn btn-primary btn-round">Tambah</a>
                                        </div>     
                                    </div>  
                                </form>
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
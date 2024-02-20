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
                                <h4 class="header-title">Daftar Kategori</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" style="width:100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Kategori</th>
                                                <th>Jumlah Produk</th>
                                                <th>Tanggal Dibuat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=1; @endphp
                                            @foreach($data as $row)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$row->namakategori}}</td>
                                                <td>#jumlahproduk</td>
                                                <td>{{$row->tgldibuat}}</td>
                                                <th>
                                                    <a href="{{url('kategori').'/' .$row->idkategori. '/edit'}}" class="btn btn-rounded btn-success sm-10">UBAH</a> 
                                                    <a href="{{url('kategori').'/' .$row->idkategori. '/hapus'}}" class="btn btn-rounded btn-danger sm-10" onclick="return confirm('yakin?');" >HAPUS</a>

                                                    <!-- syntax href ubah: edit-ketegori.php?idkategori=< ?= $p["idkategori"];?> -->
                                                    <!-- syntax href hapus: edit-ketegori.php?idkategori=< ?= $p["idkategori"];?> -->
                                                </th>
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
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Kategori</h4>
                                    </div>
                                    <div class="modal-body">
                                        <a href="/kategori/create" class="form-control btn btn-primary">Tambah Kategori</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

					

            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->

@endsection
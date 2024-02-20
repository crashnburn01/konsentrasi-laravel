@extends('layout.index')

@section('container')
            <div class="main-content-inner">
                <div class="row">

                    <!-- Primary table start -->
                    
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Daftar Produk</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" style="width:100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>#</th>
                                                <th>Gambar</th>
                                                <th>Nama</th>
                                                <th>Deskripsi</th>
                                                <th>Stok</th>
                                                <th>Rate</th>
                                                <th>Kategori</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=1; @endphp
                                            @foreach($dataProduk as $row)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td><img src="produk/{{$row->gambar}}" width="50px"\></td>
                                                <td>{{$row->namaproduk}}</td>
                                                <td>{{$row->deskripsi}}</td>
                                                <td>{{$row->stok}}</td>
                                                <td>{{$row->rate}}</td>
                                                <td>{{$row->namakategori}}</td>
                                                <td>{{$row->hargaafter}}</td>
                                                <th>
                                                    <a href="{{url('produk').'/' .$row->idproduk. '/edit'}}" class="btn btn-rounded btn-success sm-10">
                                                        <i class="ti-pencil-alt" style="align-items: center;"></i></a> 
                                                    <a href="{{url('produk').'/' .$row->idproduk. '/hapus'}}" class="btn btn-rounded btn-danger sm-10" onclick="return confirm('yakin?');" >
                                                        <i class="ti-trash" style="align-items: center;"></i></a>

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
                                            <a href="/produk/create" class="btn btn-primary btn-round">Tambah Data</a>
                                        </div>     
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->

@endsection
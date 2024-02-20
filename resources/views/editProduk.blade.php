@extends('layout.edit')

@section('container')
<div class="main-content-inner">
                <div class="row">

                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Produk</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('produk.update',['idproduk' => $data->idproduk]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>Nama Produk</label>
                                                <input name="namaproduk" type="text" class="form-control" value="{{$data->namaproduk}}" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <label for="idkategori">Nama Kategori</label>
                                                <select name="idkategori" class="custom-select">
                                                    <option selected>Pilih Kategori</option>
                                                    @foreach ($kategori as $ktg)
                                                        <option value="{{ $ktg->idkategori }}" {{ $ktg->idkategori === $ktg->idkategori ? 'selected' : '' }}>{{ $ktg->namakategori }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Deskripsi Produk</label>
                                                <input class="form-control" name="deskripsi" rows="4" value="{{$data->deskripsi}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Stok</label>
                                                <input class="form-control" type="number" name="stok" value="{{$data->stok}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Rating Produk</label>
                                                <input name="rate" type="number" class="form-control" min="1" max="5"value="{{$data->rate}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Produk</label>
                                                <input name="hargaproduk" type="number" class="form-control" value="{{$data->hargaafter}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Gambar Produk</label>
                                                <input name="gambar" type="file" class="form-control">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <input type="submit" class="btn btn-primary" value="Tambah">
                                        </div>
                                    </form>
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
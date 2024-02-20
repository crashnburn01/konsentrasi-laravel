@extends('layout.edit')

@section('container')
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Tambah Metode</h4><br>
                                        <form action="{{ route('kategori.update',['idkategori' => $data->idkategori]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <input name="namakategori" type="text" class="form-control" value="{{$data->namakategori}}">
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


@endsection
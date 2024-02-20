@extends('layout.input')

@section('container')
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Tambah Kategori</h4><br>
                                        <form action="{{url('kategori/create')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <input name="namakategori" type="text" class="form-control">
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
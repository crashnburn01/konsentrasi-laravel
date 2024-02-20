@extends('layout.edit')

@section('container')
<div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Edit Metode</h4><br>
                                        <form action="{{ route('metode.update',['no' => $data->no]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="Nama Metode" class="col-form-label">Nama Metode</label>
                                                <input class="form-control" name="metode" type="text" value="{{$data->metode}}" require>
                                            </div>
                                            <div class="form-group">
                                                <label for="No. Rek" class="col-form-label">Nomor Rekening</label>
                                                <input class="form-control" name="norek" type="text" value="{{$data->norek}}" require>
                                            </div>
                                            <div class="form-group">
                                                <label for="Atas Nama" class="col-form-label">Atas Nama</label>
                                                <input class="form-control" name="an" type="text" value="{{$data->an}}" require>
                                            </div>
                                            <div class="form-group">
                                                <label for="URL" class="col-form-label">URL Logo</label>
                                                <input class="form-control" name="logo" type="text" value="{{$data->logo}}" require>
                                            </div>

                                            <div class="modal-footer">
                                                <input name="ubahmetode" type="submit" class="btn btn-primary" value="Ubah">
                                            </div>   

                                        </form>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>


@endsection
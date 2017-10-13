@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Data Homestay</div>
                <div class="panel-body">

                    <form action="{{ route('homestay.store') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 control-label">Alamat</label>
                            <div class="col-md-6">
                                <textarea name="alamat" class="form-control"> </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 control-label">No Telepon</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="no_telp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 control-label">Deskripsi</label>
                            <div class="col-md-6">
                                <textarea name="deskripsi" class="form-control"> </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 control-label">Harga</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="harga">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

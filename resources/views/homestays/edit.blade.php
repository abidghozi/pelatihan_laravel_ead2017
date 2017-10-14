@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ubah Data Homestay</div>
                <div class="panel-body">

                    <form action="{{ route('homestay.update', ['homestay'=>$homestay->id]) }}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama" value="{{ $homestay->nama }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 control-label">Alamat</label>
                            <div class="col-md-6">
                                <textarea name="alamat" class="form-control">{{ $homestay->alamat }} </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 control-label">No Telepon</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="no_telp" value="{{ $homestay->no_telp }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 control-label">Deskripsi</label>
                            <div class="col-md-6">
                                <textarea name="deskripsi" class="form-control">{{ $homestay->deskripsi }} </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 control-label">Harga</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="harga" value="{{ $homestay->harga }}">
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

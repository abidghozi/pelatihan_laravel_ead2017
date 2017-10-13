@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Data Role</div>
                <div class="panel-body">

                    <form action="{{ route('role.store') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 control-label">Nama Role</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Role">
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

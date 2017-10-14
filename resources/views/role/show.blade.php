@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Role</div>
                <div class="panel-body">
                    <div class="form-group row">
                        <label for="nama" class="col-md-4 control-label">Nama Role</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nama" value="{{ $data->name }}" disabled="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Available Permission</div>
                <div class="panel-body">

                    <form action="{{ route('role.update', ['role' => $data->id]) }}" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group row" style="padding:5%;">
                            <table class="table table-bordered">
                                @foreach($permissions as $controller => $keys)
                                <tr>
                                    <td style="vertical-align: middle;">{{ $controller }}</td>
                                    <td>
                                        @foreach($keys as $permission)
                                        <input style="margin:3%;" type="checkbox" name="permissions[]"
                                        value="{{ $permission." ".$controller }}"
                                        {{ $data->hasPermissionTo($permission. " ".$controller) ? "checked" : ""  }}>
                                        {{ $permission  }}
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                            </table>
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

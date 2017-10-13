@extends('layouts.app')

@section('content')
<div align="center" style="padding:1% 5% 5% 5%">
    <h2>Data Role</h2>
    <table border='0' class="table table-hover">
        <tr>
            <th>Nama</th>
            <th>Guard Name</th>
            <th>Tools</th>
        </tr>
        @foreach ($datas as $data)
        <tr>
            <td><a href="{{ route('role.show', ['role' => $data->id]) }}">{{ $data->name }}</a></td>
            <td>{{ $data->guard_name }}</td>
            <td width="10%">
                <center>
                    <form action="{{ route('homestay.destroy', ['homestay' => $data->id]) }}" method="post" onsubmit="">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input class="btn btn-danger" type="submit" value="hapus">
                    </form>
                </center>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<div align="center">
    <a class="btn btn-primary" href="{{ route('role.create') }}">Tambah Data</a>
</div>
<script>
function showConfirm(){
    if(!confirm('Apakah Anda Yakin?')){
        return false;
    }
}
</script>
@endsection

@extends('layouts.app')

@section('content')
<div align="center" style="padding:1% 5% 5% 5%">
    <h2>Data Homestay</h2>
    <table border='0' class="table table-hover">
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tools</th>
        </tr>
        @foreach ($datas as $data)
        <tr>
            <td><a href="#">{{ $data->nama }}</a></td>
            <td>{{ $data->deskripsi }}</td>
            <td width="10%">
                <center>
                    <a class="btn btn-warning" href="{{ route('homestay.edit', ['homestay' => $data->id]) }}">Edit</a>
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
    <a class="btn btn-primary" href="{{ route('homestay.create') }}">Tambah Data</a>
</div>
<script>
function showConfirm(){
    if(!confirm('Apakah Anda Yakin?')){
        return false;
    }
}
</script>
@endsection

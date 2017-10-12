<div align="center" style="padding:5%">
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Deskripsi</td>
            <td>Harga</td>
            <td>Status</td>
            <td>Tools</td>
        </tr>
        @foreach ($datas as $data)
        <tr>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->no_telp }}</td>
            <td>{{ $data->deskripsi }}</td>
            <td>{{ $data->harga }}</td>
            <td>{{ $data->status }}</td>
            <td><a href="{{ route('homestay.edit', ['homestay' => $data->id]) }}">Edit</a> |
                <form action="{{ route('homestay.destroy', ['homestay' => $data->id]) }}" method="post" onsubmit="">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="hapus">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<div align="center">
    <a href="{{ route('homestay.create') }}">Tambah Data</a>
</div>
<script>
    function showConfirm(){
        if(!confirm('Apakah Anda Yakin?')){
            return false;
        }
    }
</script>

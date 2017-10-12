<form action="{{ route('homestay.update', ['homestay'=>$homestay->id]) }}" method="post">
    <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}
    Edit Data
    <table border="1" style="padding">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="{{ $homestay->nama }}"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat">{{ $homestay->alamat }}</textarea></td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td><input type="number" name="no_telp" value="{{ $homestay->no_telp }}"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><textarea name="deskripsi">{{ $homestay->deskripsi }}</textarea></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga" value="{{ $homestay->harga }}"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Ubah Data"></td>
        </tr>
    </table>
</form>

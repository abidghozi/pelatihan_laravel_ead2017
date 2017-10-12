<form action="{{ route('homestay.store') }}" method="post">
    {{ csrf_field() }}
    Tambah Data
    <table border="1" style="padding">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat"> </textarea></td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td><input type="number" name="no_telp"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><textarea name="deskripsi"> </textarea></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Simpan Data"></td>
        </tr>
    </table>
</form>

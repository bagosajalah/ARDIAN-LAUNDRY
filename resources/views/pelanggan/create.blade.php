<h1>Tambah Pelanggan</h1>

<form action="/pelanggan" method="POST">
    @csrf

    <input type="text" name="nama" placeholder="Nama">
    <br><br>

    <input type="text" name="alamat" placeholder="Alamat">
    <br><br>

    <input type="text" name="telepon" placeholder="Telepon">
    <br><br>

    <button type="submit">Simpan</button>
</form>
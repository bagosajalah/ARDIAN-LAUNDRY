<h1>Edit Pelanggan</h1>

<form action="/pelanggan/{{ $pelanggan->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama" value="{{ $pelanggan->nama }}">
    <br><br>

    <input type="text" name="alamat" value="{{ $pelanggan->alamat }}">
    <br><br>

    <input type="text" name="telepon" value="{{ $pelanggan->telepon }}">
    <br><br>

    <button type="submit">Update</button>
</form>
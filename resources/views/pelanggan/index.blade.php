<h1>Data Pelanggan</h1>

<a href="/pelanggan/create">Tambah Pelanggan</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Aksi</th>
    </tr>

    @foreach ($pelanggan as $p)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->alamat }}</td>
        <td>{{ $p->telepon }}</td>
        <td>
            <a href="/pelanggan/{{ $p->id }}/edit">Edit</a>

            <form action="/pelanggan/{{ $p->id }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
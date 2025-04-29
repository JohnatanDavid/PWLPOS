<table border="1">
    <tr>
        <th>NIM</th><th>Nama</th><th>Jurusan</th><th>Aksi</th>
    </tr>
    @foreach($mahasiswa as $mhs)
    <tr>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->jurusan }}</td>
        <td><a href="{{ route('mahasiswa.nilai', $mhs->id) }}">Nilai</a>
        </td>
    </tr>
    @endforeach
</table>

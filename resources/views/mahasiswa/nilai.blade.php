<h2>Nilai {{ $mahasiswa->nama }}</h2>

@if($nilai->isEmpty())
    <p>Belum ada nilai yang tersedia.</p>
@else
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilai as $index => $n)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $n->mataKuliah->nama }}</td>
                <td>{{ $n->mataKuliah->sks }}</td>
                <td>{{ $n->nilai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif

<br>
<a href="{{ url('/MHS') }}">Kembali</a>

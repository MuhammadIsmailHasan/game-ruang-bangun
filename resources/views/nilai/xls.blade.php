<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Sekolah</th>
            <th>Nilai</th>
            <th>Tanggal Main</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->user->kelas }}</td>
                <td>{{ $item->user->sekolah }}</td>
                <td>{{ $item->skor }}</td>
                <td>{{ $item->tanggal }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
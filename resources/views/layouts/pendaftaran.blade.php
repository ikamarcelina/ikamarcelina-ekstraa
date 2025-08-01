<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftar</title>
</head>
<body>
    <h2>Data Pendaftar Ekstrakurikuler</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Ekskul</th>
        </tr>
        @foreach($data as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->kelas }}</td>
            <td>{{ $p->ekskul }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

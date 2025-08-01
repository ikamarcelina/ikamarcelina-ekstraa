<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Ekskul</title>
</head>
<body>
    <h2>Form Pendaftaran Ekstrakurikuler</h2>

    <form method="POST" action="/daftar">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas"><br><br>

        <label>Ekskul:</label><br>
        <input type="text" name="ekskul"><br><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>

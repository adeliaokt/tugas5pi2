<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Kontrak Matakuliah Mahasiswa</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="kontrak_mk.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Mata Kuliah</label>
        <br>
        <input type="text" name="mk_id">
        <br>
        <label>Nama</label>
        <br>
        <input type="text" name="nama">
        <br><br>
        <button type="submit" name="submit_simpan_kontrak">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
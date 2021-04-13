<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit_absen($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Absen Mahasiswa</title>
</head>

<body>
    <h1>Edit Absen Mahasiswa</h1>
    <a href="absen.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>NIM</label>
        <br>
        <input type="text" name="nim" value="<?php echo $data->nim ?>">
        <br>
        <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama ?>">
        <br>
        <label>Mata Kuliah</label>
        <br>
        <input type="text" name="matakuliah" value="<?php echo $data->matakuliah ?>">
        <br>
        <label>Waktu Absen</label>
        <br>
        <input type="time" name="waktu_absen" value="<?php echo $data->waktu_absen ?>">
        <br>
        <label>Status</label>
        <br>
        <input type="text" name="status" value="<?php echo $data->status ?>">
        <br><br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>
</html>
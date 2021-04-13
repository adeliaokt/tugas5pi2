<?php
$nim = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit_mk($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Mata Kuliah Mahasiswa</title>
</head>

<body>
    <h1>Edit Data Mata Kuliah Mahasiswa</h1>
    <a href="matakuliah.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>NIM</label>
        <br>
        <input type="text" name="nim" value="<?php echo $data->nim ?>">
        <br>
        <label>Nama Mata Kuliah</label>
        <br>
        <input type="text" name="nama_mk" value="<?php echo $data->nama_mk ?>">
        <br><br>
        <button type="submit" name="submit_edit_mk">Submit</button>
    </form>
</body>

</html>
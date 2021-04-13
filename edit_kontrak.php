<?php
$matakuliah = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_kontrak($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Kontrak Mata Kuliah Mahasiswa</title>
</head>

<body>
    <h1>Edit Data Kontrak Mata Kuliah Mahasiswa</h1>
    <a href="kontrak_mk.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Mata Kuliah</label>
        <br>
        <input type="text" name="matakuliah" value="<?php echo $data->matakuliah ?>">
        <br>
        <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama ?>">
        <br><br>
        <button type="submit" name="submit_edit_kontrak">Submit</button>
    </form>
</body>

</html>
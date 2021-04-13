<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Pemrograman Internet 2</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="mahasiswa.php">Mahasiswa</a></li>
                <li class="nav-item"><a class="nav-link" href="matakuliah.php">Mata Kuliah</a></li>
                <li class="nav-item"><a class="nav-link" href="kontrak_mk.php">Kontrak Mata Kuliah</a></li>
                <li><a href="absen.php">Absen</a></li>
                <li><a href="index.php">Nilai</a></li>
            </ul>
        </div>
</nav>

<h1>Data Mahasiswa</h1>
        <a href="create_mhs.php">Tambah Data</a>
        <br>
        <a href="print_mhs.php" target="_blank">Cetak Data</a>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>NA</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_data();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->nim ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->uts ?></td>
                            <td><?= $data->uas ?></td>
                            <td><?= $data->tugas ?></td>
                            <td><?= $data->na ?></td>
                            <td><?= $data->status ?></td>
                            <td>
                                <a name="edit" id="edit" href="edit.php?nim=<?= $data->nim ?>">Edit</a>
                                <a name="hapus" id="hapus" href="process.php?nim=<?= $data->nim ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                <tr>
                    <td colspan="9">Belum Ada Data Pada Tabel Mahasiswa.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
       
</body>
</html> 
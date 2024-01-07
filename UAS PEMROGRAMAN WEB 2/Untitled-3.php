<?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }
 
    ?>
    <?php 
require 'functions.php';
$pegawai = query("SELECT * FROM pegawai");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $pegawai = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="logout.php">Logout</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="halaman_admin.php">Beranda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="kue.php">Kue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="keuangan.php">Keuangan</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
            <div class="col-md-9">
                <!-- Content Area -->
                <br>
                <h2>Selamat datang di Dashboard</h2>
                <a href="tambah.php"><i class="fas fa-plus-square"></i>Tambah data pegawai</a>
                <p class="lead"><center>
<form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button> 
</form>
<br>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Kode Pegawai</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>No Hp</th>
        <th>Email</th>
        <th>Posisi</th>
        <th>Gambar</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $pegawai as $row ) : ?>
    <tr>
        <td>
            <p><a href="ubah.php?id=<?= $row["id"]; ?>"onclick="return confirm('yakin?');">ubah</a></p>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        <td><?= $i; ?></td>
        <td><?= $row["kodepegawai"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><?= $row["tanggallahir"]; ?></td>
        <td><?= $row["jeniskelamin"]; ?></td>
        <td><?= $row["nohp"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["posisi"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    
</table></center></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-2 mt-3">
        <p>&copy; 2023 Nama Perusahaan. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

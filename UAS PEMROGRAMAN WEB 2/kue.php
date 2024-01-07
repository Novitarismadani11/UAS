<?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }
 
    ?>
    <?php 
require 'functions2.php';
$kue = query("SELECT * FROM kue");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $kue = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>body {
    background-image: url('img/r.jpeg'); /* Ganti dengan jalur sebenarnya ke gambar Anda */
    background-size: cover; /* Sesuaikan sesuai kebutuhan */
    background-position: center; /* Sesuaikan sesuai kebutuhan */
    }</style>
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
                <h2>Selamat datang</h2>
                <a href="tambah2.php"><i class="fas fa-plus-square"></i>Tambah data kue</a>
                <p class="lead"><center>
<form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button> 
</form>
<br>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>Aksi</th>
        <th>No.</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Gambar</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $kue as $row ) : ?>
    <tr>
    <td>
        <a href="ubah2.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ubah data?');"><i class="fas fa-edit"></i> Ubah</a> 
    
                <a href="hapus2.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin hapus data?');"><i class="fas fa-trash-alt"></i> Hapus</a>
        </td>
        <td><?= $i; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["harga"]; ?></td>
        <td><?= $row["stok"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    
</table></center></p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-2 mt-3">
        <p>&copy; 2024 toko kue jaya.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

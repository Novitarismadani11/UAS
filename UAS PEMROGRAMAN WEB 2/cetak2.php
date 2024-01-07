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
<html>
<head>
    <title>Halaman Pengurus</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<h1>Daftar kue</h1>
<center>
<br>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Gambar</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $kue as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["harga"]; ?></td>
        <td><?= $row["stok"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    
</table>
</center>
<script>
    window.print();
    </script>
</body>
</html>

</body>
</html>
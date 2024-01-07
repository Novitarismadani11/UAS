<?php
require 'functions2.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  
  // cek apakah data berhasil di tambahkan atau tidak
  if( tambah($_POST) > 0 ) {
    echo "
      <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'kue.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'kue.php';
      </script>
    ";
  }


}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah data kue</title>
</head>
<body>
  <head>
  <title>Tambah data kue</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 600px;
      margin: 20px auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input,
    select {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
      margin-top: 5px;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    button a {
      color: #fff;
      text-decoration: none;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>

  <h1>Tambah data kue</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="nama">Nama kue : </label>
        <input type="text" name="nama" id="nama" required>
      </li>
      <li>
        <label for="harga">harga :</label>
        <input type="text" name="harga" id="harga">
      </li>
      <li>
        <label for="stok">stok :</label>
        <input type="text" name="stok" id="stok">
      </li>
      <li>
        <label for="gambar">Gambar :</label>
        <input type="file" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data!</button>
        <button type="submit" name="submit"><a href="logout.php">LOGOUT</a></button>
      </li>
    </ul>

  </form>




</body>
</html>

  
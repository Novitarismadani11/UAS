<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$id_mhs = $_POST['id_mhs'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jurusan = $_POST['jurusan'];
	$minat = $_POST['minat'];

	// Upload file foto
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];

    // Set path folder tempat menyimpan gambarnya
	$path = "foto/".$foto;
	move_uploaded_file($tmp_foto, $path);
	
	// buat query
	$sql = "INSERT INTO mahasiswa (id_mhs, nama, alamat, jk, tgl_lahir, jurusan, minat, foto) VALUE ('$id_mhs', '$nama', '$alamat', '$jk', '$tgl_lahir', '$jurusan', '$minat', '$foto')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>

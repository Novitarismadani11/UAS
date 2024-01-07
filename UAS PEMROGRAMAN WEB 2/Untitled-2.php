<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "toko");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}
 

function tambah($data) {
	global $conn;

	$nama = ($data["nama"]);
	$harga = ($data["harga"]);
	$stok = ($data["stok"]);
	$lokasi = ($data["lokasi"]);
	

	$query = "INSERT INTO komputer
				VALUES
			  ('', '$nama', '$harga', '$stok', '$lokasi')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM komputer WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nama = ($data["nama"]);
	$harga = ($data["harga"]);
	$stok = ($data["stok"]);
	$lokasi = ($data["lokasi"]);
	

	$query = "UPDATE komputer SET
				nama = '$nama',
				harga = '$harga',
				stok = '$stok',
				lokasi = '$lokasi'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}


function cari($keyword) {
	$query = "SELECT * FROM komputer
				WHERE
			  harga LIKE '%$keyword%' OR
			  nama LIKE '%$keyword%' OR
			  stok LIKE '%$keyword%' OR
			  lokasi LIKE '%$keyword%'
			";
	return query($query);
}


?>

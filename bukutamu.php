<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bukutamu";

	// membuat koneksi
	$koneksi = mysqli_connect($servername, $username, $password, $dbname);
	// cek koneksi
	if(!$koneksi){
		die("Koneksi gagal : " . msqli_connect_error());
	}

	// membuat tabel
	$sql = "CREATE TABLE buku_tamu (
	id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nama VARCHAR(200) NOT NULL,
	email VARCHAR(50) NOT NULL,
	isi text
	)";

	if (mysqli_query($koneksi, $sql)) {
	  echo "Table buku_tamu berhasil dibuat";
	} else {
	  echo "Table buku_tamu gagal dibuat : " . mysqli_error($koneksi);
	}
	mysqli_close($koneksi);
?>
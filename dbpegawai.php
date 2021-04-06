<?php  
	$servername = "localhost";
	$username = "root";
	$password = "";

	//membuat koneksi
	$koneksi = mysqli_connect($servername, $username, $password);
	//mengecek koneksi
	if(!$koneksi){
		die("Koneksi gagal : " . msqli_connect_error());
	}

	//membuat database
	$sql = "CREATE DATABASE pegawai";
	if(mysqli_query($koneksi, $sql)){
		$koneksi = mysqli_connect($servername, $username, $password,"pegawai");
		echo "Database Berhasil dibuat"."<br>";
		//membuat tabel
		$tabel = "CREATE TABLE tb_pegawai (
		id int (10)not null auto_increment,
		kode int (20) not null,
		nama varchar(50) not null,
		email varchar(50),
		alamat varchar(100),
		primary key (id),
		unique key kode(kode)
		)";
		if (mysqli_query($koneksi, $tabel)) {
	  		echo "Table datapegawai berhasil dibuat";
		} else {
	  		echo "Table pegawai gagal dibuat : " . mysqli_error($koneksi);
		}
	}else{
		echo "Database gagal dibuat : " . mysqli_error($koneksi);
	}
	mysqli_close($koneksi);
?>
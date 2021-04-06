<?php  
	$servername = "localhost";
	$username = "root";
	$password = "";

	//create connection
	$koneksi = mysqli_connect($servername, $username, $password);
	//check connection
	if(!$koneksi){
		die("Koneksi gagal : " . msqli_connect_error());
	}

	//create database
	$sql = "CREATE DATABASE myDB";
	if(mysqli_query($koneksi, $sql)){
		echo "Database berhasil dibuat";
	}else{
		echo "Database gagal dibuat : " . mysqli_error($koneksi);
	}
	mysqli_close($koneksi);
?>
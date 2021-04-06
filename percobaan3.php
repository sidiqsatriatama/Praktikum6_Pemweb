<?php  
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mahasiswa";

	//create connection
	$koneksi = mysqli_connect($servername, $username, $password, $dbname);
	//check connection
	if(!$koneksi){
		die("Koneksi gagal : " . msqli_connect_error());
	}

	//mengisi tabel liga
	$sql = "INSERT Into liga (kode, negara, champion)
	VALUES ('Jer', 'Jerman', '4'),
			('spa', 'Spanyol', '3'),
			('eng', 'English', '3')";

	if(mysqli_query($koneksi, $sql)){
		echo "New Record Berhasil dibuat";
	}else{
		echo "Error : " . $sql . "<br>" . mysqli_error($koneksi);
	}
	mysqli_close($koneksi);
?>
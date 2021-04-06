<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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

	//memanggil data didalam tabel
	$sql = "SELECT kode, negara, champion FROM liga";
	$result = mysqli_query($koneksi, $sql);

	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo "code : " . $row["kode"]. "- Negara : " . $row["negara"]. " ". $row["champion"].
			"<br>";
		}
	}else{
		echo "0 results";
	}
	mysqli_close($koneksi);
?>
</body>
</html>
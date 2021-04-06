<html>
<head>
	<title></title>
</head>
<body>
	<h3>HAPUS DATA BERDASARKAN KODE</h3>
	<form name="update_user" method="get" action="crud.php">
		<p>Cari KODE : <input type="text" name="find_kode"></p>
		<input type="submit" name="find_del" value="Hapus data pegawai">
		
	</form>
	<h3>EDIT DATA BERDASARKAN KODE</h3>
	<form name="update_user" method="get" action="crud.php">
		<p>Kode : <input type="number" name="KODE2"></p>
		<p>Nama : <input type="text" name="NAMA2"></p>
		<p>Email : <input type="text" name="EMAIL2"></p>
		<p>Alamat : <input type="text" name="ALAMAT2"></p>
		<input type="submit" name="find_edit" value="Edit data pegawai">
	</form>
	<h3>TAMBAH DATA</h3>
	<form name="update_user" method="get" action="crud.php">
		<p>Kode : <input type="number" name="KODE"></p>
		<p>Nama : <input type="text" name="NAMA"></p>
		<p>Email : <input type="text" name="EMAIL"></p>
		<p>Alamat : <input type="text" name="ALAMAT"></p>
		<input type="submit" name="in_db" value="Submit">
	</form>
</body>
</html>

<?php  
	//Mysql data
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pegawai";

	//membuat connection
	$koneksi = mysqli_connect($servername, $username, $password, $dbname);


	//cek connection
	if(!$koneksi){
		die("Koneksi gagal : " . msqli_connect_error());
	}

	//memanggil data didalam tabel
	$sql = "SELECT kode, nama, email, alamat FROM tb_pegawai";
	$result = mysqli_query($koneksi, $sql);

	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo "Kode Pegawai : " . $row["kode"]."<br>". "NAMA : " . $row["nama"]."<br>". "Email : ". $row["email"]."<br>". "Alamat : ". $row["alamat"]."<br>"."<br>";
		}
	}else{
		echo "0 results";
	}
	


	// Mengmasukkan data ke database
	if(isset($_GET['in_db'])) {
		$kode = $_GET['KODE'];
		$nama = $_GET['NAMA'];
		$email = $_GET['EMAIL'];
		$alamat = $_GET['ALAMAT'];
					
		// menambahkan inputan ke database
		$result = mysqli_query($koneksi, "INSERT INTO tb_pegawai(kode,nama,email,alamat) VALUES('$kode','$nama','$email','$alamat')");
		
		header("Location: crud.php");
	}

	// Menghapus data database
	
	 if(isset($_GET['find_del'])){
	 	$kode = $_GET['find_kode'];
	 	$result = mysqli_query($koneksi, "DELETE FROM tb_pegawai WHERE kode=$kode");
	 	header("Location: crud.php");
	 }

	// EDIT data database
	 if(isset($_GET['find_edit'])){	
		$kode = $_GET['KODE2'];
		$nama = $_GET['NAMA2'];
		$email = $_GET['EMAIL2'];
		$alamat = $_GET['ALAMAT2'];
			
		// untuk update data pegawai
		$result = mysqli_query($koneksi, "UPDATE tb_pegawai SET kode='$kode',nama='$nama',email='$email',alamat='$alamat' WHERE kode=$kode");
		
		// redirect ke index jika sudah update
		header("Location: crud.php");
	}
?>
  
<!DOCTYPE html>
<html>
<head>
	<title>Koneksi database mysql</title>
</head>
<body>
	<h1>Demo Koneksi database Mysql</h1>
	<?php  
		$con = mysqli_connect("localhost","root","","mahasiswa");

		//check koneksi
		if (mysqli_connect_errno()) {
			echo "Failed to Connect to MySql : " . mysqli_connect_error();
			exit();
		}
	?>
</body>
</html>
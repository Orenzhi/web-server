<?php  
error_reporting(E_ALL ^ E_NOTICE);
	$dbhost = 'localhost';
	$username = 'root';
	$password = 'Rezhi13251';
	$dbname = 'projectso';

	$connection = mysqli_connect($dbhost, $username, $password, $dbname);

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php menggunakan menthod = POST

		$nama = $_POST['nama'];
		$jenis_kelamin= $_POST['jenis_kelamin'];
		$instansi = $_POST['instansi'];
		$alamat = $_POST['alamat'];




//PERINTAH SQL
$query = "INSERT INTO daftarpeserta VALUES (null, '$nama', '$jenis_kelamin', '$instansi', '$alamat')";

$result = mysqli_query($connection, $query) or die (mysqli_error());

if ($result) {
	echo "<center>Data berhasil disimpan
	<meta http-equiv = 'refresh' content='2; url= daftarpeserta.php'> </center>";
} else {
	echo "Data gagal disimpan
	<meta http-equiv='refresh' content='2; url = login.php'>";
}

?>
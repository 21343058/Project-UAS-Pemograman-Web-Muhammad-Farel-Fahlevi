<?php
include 'database.php';

if(isset($_POST['submit'])){
	// var_dump($_POST); die;
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$job = $_POST['job'];	
	$payment = $_POST['payment'];
	$barang = $_POST['barang'];
	$jumlah = $_POST['jumlah'];

	$simpan = "INSERT INTO uasweb (first_name, last_name, email, nohp, alamat, job, payment, barang, jumlah)
	VALUES ('$first_name', '$last_name' ,'$email','$nohp', '$alamat', '$job','$payment','$barang', '$jumlah')";

	$result = mysqli_query($conn,$simpan);

	if ($result) {
		header("Location: ../index/display.php");
	}
}
?>
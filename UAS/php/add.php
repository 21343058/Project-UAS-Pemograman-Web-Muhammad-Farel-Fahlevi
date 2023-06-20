<!doctype html>
<html lang="en">

<head>
	<title>Dream Store</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.2.0-beta1 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="../css/gaya.css"> -->
	<link rel="stylesheet" href="../index/style.css">

</head>

<body>
	<div class="content">
		<header>
			<h1 class="judul"><b>Dream Store<b></h1>
			<h3 class="deskripsi">'Gaming Tools'</h3>
		</header>

		<div class="menu" style="align-item: center;">
			<ul>
				<li><a href="../index/index.php"><b>DASHBOARD<b></a></li>


			</ul>

			<div class="badan">

				<?php 
if(isset($_GET['page'])){
$page = $_GET['page'];

switch ($page) {
case 'home':
	include "../index/home.php";
	break;
case 'laptop':
	include "../index/laptop.php";
	break;	
case 'mouse':
	include "../index/mouse.php";
	break;			
default:
	echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
	break;
}

}

?>

				<form method="POST" action="list.php">
					<div class="row mb-3">
						<label for="inputEmail3" class="col-sm-2 col-form-label" bgcolor="white">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3" name="email">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputPassword3" class="col-sm-2 col-form-label">Nama Depan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputPassword3" name="first_name">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputPassword3" class="col-sm-2 col-form-label">Nama Belakang</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputPassword3" name="last_name">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputPassword3" class="col-sm-2 col-form-label">No. HP</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="inputPassword3" name="nohp">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputPassword3" name="alamat">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputPassword3" class="col-sm-2 col-form-label">Pekerjaan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputPassword3" name="job">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputPassword3" class="col-sm-2 col-form-label">Metode Pembayaran</label>
						<div class="col-sm-10">
							<select class="form-select" aria-label="Default select example" name="payment">
								<option selected>Pilih!</option>
								<option value="COD">COD</option>
								<option value="BRI">BRI</option>
								<option value="BNI">BNI</option>
								<option value="BCA">BCA</option>
								<option value="MANDIRI">MANDIRI</option>
								<option value="NAGARI">NAGARI</option>
							</select>
						</div>
					</div>
			</div>
			<div class="row mb-3">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Pilih Barang</label>
				<div class="col-sm-10">
					<select class="form-select" aria-label="Default select example" name="barang">
						<option selected>Pilih!</option>
						<option value="MSI Katana GF66 i5-11400H">MSI Katana GF66 i5-11400H</option>
						<option value="MSI Katana GF66 Intel® Core™ i7-12700H">MSI Katana GF66 Intel® Core™ i7-12700H
						</option>
						<option value="MSI KATANA GF66 i7-12700H">MSI KATANA GF66 i7-12700H</option>
						<option value="LENOVO LEGION 7 RYZEN 7 5800H4">LENOVO LEGION 7 RYZEN 7 5800H</option>
						<option value="LENOVO LEGION 5 RYZEN 5 5600H">LENOVO LEGION 5 RYZEN 5 5600H</option>
						<option value="Lenovo Ideapad Gaming 3(AMD Ryzen 5 5600H">Lenovo Ideapad Gaming 3(AMD Ryzen 5
							5600H</option>
						<option value="ASUS TUF Gaming F15 FX506LH">ASUS TUF Gaming F15 FX506LH</option>
						<option value="ASUS TUF Gaming F15 FX506HCB">ASUS TUF Gaming F15 FX506HCB</option>
						<option value="ASUS ROG Flow Z13 I7-12700H">ASUS ROG Flow Z13 I7-12700H</option>
						<option value="ACER NITRO 5 AN515">ACER NITRO 5 AN515</option>
						<option value="ACER Predator Helios PH315-54-724L">ACER Predator Helios PH315-54-724L</option>
						<option value="ACER PREDATOR HELIOS PH315-54-712C">ACER PREDATOR HELIOS PH315-54-712C</option>
						<option value="Mouse Gaming A4Tech X7 XL-747H Macro S8H2">Mouse Gaming A4Tech X7 XL-747H Macro
							S8H2</option>
						<option value="Logitech G Pro X Superlight Wireless Gaming Mouse">Logitech G Pro X Superlight
							Wireless Gaming Mouse </option>
						<option value="Razer Naga Pro Mouse Wireless Gaming">Razer Naga Pro Mouse Wireless Gaming
						</option>
					</select>
				</div>
			</div>

			<div class="row mb-3">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Barang</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="inputPassword3" name="jumlah">
				</div>
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Berikutnya</button>
			</form>

			<!-- Bootstrap JavaScript Libraries -->
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
				integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
				crossorigin="anonymous"></script>

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
				integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
				crossorigin="anonymous"></script>

			<div class="halaman">
				<h1>Laptop MSI</h1>
				<table border="1" cellspacing="0" align="center" cellpadding="5" width="400" bgcolor="white">
					<tr align="center">
						<td>
							<img src="../gambar/gf66.jpg" height="300px" width="300px">
						</td>
						<td>
							<img src="../gambar/gf66i7.jpg" height="300px" width="300px">
						</td>
						<td>
							<img src="../gambar/highend.jpg" height="300px" width="300px">
						</td>
					</tr>
					<tr align="center">
						<td><b> MSI Katana GF66 i5-11400H 8GB 512GB RTX3050 4GB W11 144Hz<br>Rp.12.899.000.00 </b></td>
						<td><b> MSI Katana GF66 Intel® Core™ i7-12700H , 8GB , 512GB , RTX 3050 4GB, 15" 144Hz, WIN
								11<br>Rp.17.499.000.00 </b></td>
						<td><b> MSI KATANA GF66 i7-12700H 16GB 512GB RTX3060 6GB<br>Rp.21.599.000.00 </b></td>
					</tr>
				</table>

				<p></p>
				<h1>Laptop Lenovo</h1>
				<table border="1" cellspacing="0" align="center" cellpadding="5" width="400" bgcolor="white">
					<tr align="center">
						<td>
							<img src="../gambar/legion 7.jpg" height="300px" width="300px">
						</td>
						<td>
							<img src="../gambar/legion5.jpg" height="300px" width="300px">
						</td>
						<td>
							<img src="../gambar/ideapad.jpg" height="300px" width="300px">
						</td>
					</tr>
					<tr align="center">
						<td><b> LENOVO LEGION 7 RYZEN 7 5800H 2*16GB 1TB SSD RTX3060 6GB 16" W10 <br>Rp.26.079.000.00
							</b></td>
						<td><b> LENOVO LEGION 5 RYZEN 5 5600H 16GB 512GB SSD RTX3050 4GB 15.6" FHD IPS 165Hz W10
								<br>Rp.17.129.000.00 </b></td>
						<td><b> Lenovo Ideapad Gaming 3(AMD Ryzen 5 5600H / 8GB / 512GB SSD / RTX 3050 4GB/15.6" FHD IPS
								AG<br>Rp.13.700.000.00 </b></td>
					</tr>
				</table>

				<p></p>
				<h1>Laptop Asus</h1>
				<table border="1" cellspacing="0" align="center" cellpadding="5" width="400" bgcolor="white">
					<tr align="center">
						<td>
							<img src="../gambar/asusf15.jpg" height="300px" width="300px">
						</td>
						<td>
							<img src="../gambar/f15.jpg" height="300px" width="300px">
						</td>
						<td>
							<img src="../gambar/rog.jpg" height="300px" width="300px">
						</td>
					</tr>
					<tr align="center">
						<td><b> ASUS TUF Gaming F15 FX506LH-I565B6T-O11 - Fortress Gray <br>Rp.11.649.000.00 </b></td>
						<td><b> ASUS TUF Gaming F15 FX506HCB-I735B8T-O11 <br>Rp.18.163.000.00 </b></td>
						<td><b> ASUS ROG Flow Z13 GZ301ZC-I735A6T-O
								(13.4",I7-12700H/RTX3050-V4G/8G*2/512G/11/Black/OPI)<br>Rp.27.199.000.00 </b></td>
					</tr>
				</table>

				<p></p>
				<h1>Laptop Acer</h1>
				<table border="1" cellspacing="0" align="center" cellpadding="5" width="400" bgcolor="white">
					<tr align="center">
						<td>
							<img src="../gambar/nitro5.jpg" height="300px" width="300px">
						</td>
						<td>
							<img src="../gambar/predator.jpg" height="300px" width="300px">
						</td>
						<td>
							<img src="../gambar/predhel.jpg" height="300px" width="300px">
						</td>
					</tr>
					<tr align="center">
						<td><b> ACER NITRO 5 AN515-57-71CV Gaming (15.6",Intel Core
								i7-11800H,16G,512G,RTX3050)<br>Rp.16.449.000.00 </b></td>
						<td><b> ACER Predator Helios PH315-54-724L [15.6"/i7-11800H/16GB/512GB/RTX3060/OPI]
								<br>Rp.22.709.000.00 </b></td>
						<td><b> ACER PREDATOR HELIOS PH315-54-712C (i7-11800H,16G,RTX3070<br>Rp.27.999.000.00 </b></td>
					</tr>
				</table>
				<h1>Mouse Gaming</h1>
				<table border="1" cellspacing="0" align="center" cellpadding="5" width="400" bgcolor="white">
					<tr align="center">
						<td>
							<img src="../gambar/a4.jpg" height="400px" width="400px">
						</td>
					</tr>
					<tr align="center">
						<td><b> Original Mouse Gaming A4Tech X7 XL-747H Macro S8H2<br>Rp.4.467.546.00 </b></td>
					</tr>
				</table>
				<p></p>

				<table border="1" cellspacing="0" align="center" cellpadding="5" width="400" bgcolor="white">
					<tr align="center">
						<td>
							<img src="../gambar/logitech.jpg" height="400px" width="400px">
						</td>
					</tr>
					<tr align="center">
						<td><b> ♧▧ Logitech G Pro X Superlight Wireless Gaming Mouse<br>Rp.3.203.520.00 </b></td>
					</tr>
				</table>

				<table border="1" cellspacing="0" align="center" cellpadding="5" width="400" bgcolor="white">
					<tr align="center">
						<td>
							<img src="../gambar/razer.jpg" height="400px" width="400px">
						</td>
					</tr>
					<tr align="center">
						<td><b> Razer Naga Pro Mouse Wirelss Gaming,Hyperspeed Tecj CHROMA Sistem RGB<br>Rp.3.187.000.00
							</b></td>
					</tr>
				</table>
			</div>
			
			<div class="text-center" style="width:100%">
				<p class="penutup" style="color: white;">2022 © DreamStore Muhammad Farel Fahlevi-21343058</p>
			</div>
</body>

</html>
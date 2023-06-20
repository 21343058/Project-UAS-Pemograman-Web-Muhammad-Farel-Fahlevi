<?php
include_once '../php/database.php';
$result = mysqli_query($conn, "SELECT * FROM uasweb");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Dream Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <header>
        <h1 class="judul"><b>Dream Store<b></h1>
        <h3 class="deskripsi">'Gaming Tools'</h3>
    </header>

    <div class="menu" style="align-item: center;">
        <ul>
            <li><a href="index.php?page=home"><b><i>DASHBOARD</i></b></a></li>
            <li><a href="index.php?page=laptop"><b><i>LAPTOP GAMING</i></b></a></li>
            <li><a href="index.php?page=mouse"><b><i>MOUSE GAMING</i></b></a></li>
            <li><a href="../index/display.php"><b><i>PEMBELIAN</i></b></a></li>


        </ul>
    </div>


    <div class="badan">

        <?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'laptop':
				include "laptop.php";
				break;	
            case 'mouse':
                include "mouse.php";
                break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
	}
 
	 ?>




        <div class="container-fluid">

            <div class="halaman row row-cols-2 row-cols-md-2 g-3 mt-3">
                <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
                <table class="table table-dark" style="color: white;">
                    <thead>
                        <th scope="col">No</th>
                        <th scope="col">Nama Depan</th>
                        <th scope="col">Nama Belakang</th>
                        <th scope="col">Email</th>
                        <th scope="col">No. Hp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Metode Pembayaran</th>
                        <th scope="col">Barang yang dipilih</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Keterangan</th>
                    </thead>
                    <?php
        $i=1;
        while ($row = mysqli_fetch_array($result)) {
        ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $row['first_name'] ?></td>
                            <td><?php echo $row['last_name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['nohp'] ?></td>
                            <td><?php echo $row['alamat'] ?></td>
                            <td><?php echo $row['job'] ?></td>
                            <td><?php echo $row['payment'] ?></td>
                            <td><?php echo $row['barang'] ?></td>
                            <td><?php echo $row['jumlah'] ?></td>
                            <td><a href=delete.php?id=<?php echo $row['id']; ?>"><button type="button"
                                        class="btn btn-danger">Batalkan Pesanan</button></a>
                                <a href="edit-proces.php?id=<?php echo $row['id']; ?>"><button type="button"
                                        class="btn btn-primary">Edit Pembelian</button></a></td>
                        </tr>
                    </tbody>
                    <?php
        $i++;
        }
        ?>
                </table>
                <?php
    }
    else {
        echo  "Data tidak ditemukan";
    }
    ?>
            </div>
            <div class="text-center" style="width:100%">
                <p class="penutup" style="color: black;">2022© DreamStore Muhammad Farel Fahlevi-21343058</p>
            </div>

</body>

</html>
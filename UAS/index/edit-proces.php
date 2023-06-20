<?php
include_once("../php/database.php");
$id = $_GET['id'];
if(isset($_POST['update']))
{	
// var_dump($_POST); die;
	

    try {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $job = $_POST['job'];	
        $payment = $_POST['payment'];
        $barang = $_POST['barang'];
        $jumlah = $_POST['jumlah'];
        
        // update user data
        $check = mysqli_query($conn, "UPDATE uasweb SET first_name='$first_name'
        ,last_name='$last_name',email='$email',nohp='$nohp',alamat='$alamat' ,
        job='$job' ,payment='$payment' ,barang='$barang', jumlah='$jumlah' WHERE id='$id'");
    } catch (\Throwable $th) {
        echo '<script>
        alert("Gagal Update Data!");
        </script>';
    }

    if ($check) {
		header("Location: ../index/display.php");
	}
}
?>

<?php

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM uasweb WHERE id='". $_GET['id']."'");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Proses Edit Pembelian</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/gaya.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container-fluid">
        <div class="halaman row row-cols-2 row-cols-md-2 g-4 mt-3">
            <form method="POST" action="">
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                <h4><b>Edit Pembelian: <?php echo $row['first_name']; ?></b></h4>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Nama Depan</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $row['first_name']; ?>" class="form-control"
                            id="formGroupExampleInput" name="first_name">
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Nama Belakang</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $row['last_name']; ?>" class="form-control"
                            id="formGroupExampleInput" name="last_name">
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $row['email']; ?>" class="form-control"
                            id="formGroupExampleInput" name="email">
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">No. Hp</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $row['nohp']; ?>" class="form-control"
                            id="formGroupExampleInput" name="nohp">
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $row['alamat']; ?>" class="form-control"
                            id="formGroupExampleInput" name="alamat">
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $row['job']; ?>" class="form-control"
                            id="formGroupExampleInput" name="job">
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
                    <option value="Lenovo Ideapad Gaming 3(AMD Ryzen 5 5600H">Lenovo Ideapad Gaming 3(AMD Ryzen 5 5600H
                    </option>
                    <option value="ASUS TUF Gaming F15 FX506LH">ASUS TUF Gaming F15 FX506LH</option>
                    <option value="ASUS TUF Gaming F15 FX506HCB">ASUS TUF Gaming F15 FX506HCB</option>
                    <option value="ASUS ROG Flow Z13 I7-12700H">ASUS ROG Flow Z13 I7-12700H</option>
                    <option value="ACER NITRO 5 AN515">ACER NITRO 5 AN515</option>
                    <option value="ACER Predator Helios PH315-54-724L">ACER Predator Helios PH315-54-724L</option>
                    <option value="ACER PREDATOR HELIOS PH315-54-712C">ACER PREDATOR HELIOS PH315-54-712C</option>
                    <option value="Mouse Gaming A4Tech X7 XL-747H Macro S8H2">Mouse Gaming A4Tech X7 XL-747H Macro S8H2
                    </option>
                    <option value="Logitech G Pro X Superlight Wireless Gaming Mouse">Logitech G Pro X Superlight
                        Wireless Gaming Mouse </option>
                    <option value="Razer Naga Pro Mouse Wireless Gaming">Razer Naga Pro Mouse Wireless Gaming</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row['jumlah']; ?>" class="form-control" id="formGroupExampleInput"
                    name="jumlah">
            </div>
        </div>
        <?php
                    }
                    ?>
        <button type="submit" class="btn btn-primary" name="update">Simpan</button>
        </form>
    </div>

    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
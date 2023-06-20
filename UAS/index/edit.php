<?php
include_once 'database.php';
$result = mysqli_query($conn, "SELECT * FROM uasweb");
?>
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
    <link rel="stylesheet" href="./css/gaya.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dream Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
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
                        <td><a href="edit-proces.php?id=<?php echo $row['id']; ?>"><button type="button"
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
    else{
        echo "Data tidak ditemukan";
    }
    ?>
        </div>
        <?php
            include 'footer.php';
            ?>
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
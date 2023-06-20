<?php
include '../php/database.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM uasweb WHERE id='$id'") or die(mysql_error());

if ($result) {
    print"Berhasil Hapus";
    header("location: display.php");
} else {
    print"Gagal Hapus";
}
?>
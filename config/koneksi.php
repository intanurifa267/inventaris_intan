<?php
$koneksi = mysqli_connect("localhost", "root", "", "inventaris_irga");
if (mysqli_connect_errno()) {
    echo "koneksi eror : " . mysqli_connect_error();
}
?>
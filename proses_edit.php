<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_tanaman'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

mysqli_query($koneksi,
"UPDATE tanaman SET
nama_tanaman='$nama',
jenis='$jenis',
harga='$harga'
WHERE id='$id'");

header("location:index.php");

?>
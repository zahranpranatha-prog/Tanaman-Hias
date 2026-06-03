<?php

include 'koneksi.php';

$nama = $_POST['nama_tanaman'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

mysqli_query($koneksi,
"INSERT INTO tanaman VALUES('', '$nama', '$jenis', '$harga')");

header("location:index.php");

?>
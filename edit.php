<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM tanaman WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Tanaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Edit Tanaman</h1>

<form method="POST" action="proses_edit.php">

    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

    <label>Nama Tanaman</label>
    <input type="text" name="nama_tanaman"
    value="<?php echo $d['nama_tanaman']; ?>">

    <label>Jenis</label>
    <input type="text" name="jenis"
    value="<?php echo $d['jenis']; ?>">

    <label>Harga</label>
    <input type="number" name="harga"
    value="<?php echo $d['harga']; ?>">

    <button type="submit">Update</button>

</form>

</div>

</body>
</html>
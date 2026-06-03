<?php
include 'koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM tanaman");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tanaman Hias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>🌿 Daftar Tanaman Hias Florist</h1>

    <a href="tambah.php" class="btn">+ Tambah Tanaman</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Tanaman</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_tanaman']; ?></td>
            <td><?php echo $d['jenis']; ?></td>
            <td>Rp <?php echo number_format($d['harga']); ?></td>
            <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>" class="edit">Edit</a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>" class="hapus">Hapus</a>
            </td>
        </tr>
        <?php } ?>

    </table>

</div>

<script src="script.js"></script>

</body>
</html>
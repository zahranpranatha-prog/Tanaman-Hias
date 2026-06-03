<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tanaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Tambah Tanaman</h1>

<form method="POST" action="proses_tambah.php">

    <label>Nama Tanaman</label>
    <input type="text" name="nama_tanaman" required>

    <label>Jenis</label>
    <input type="text" name="jenis" required>

    <label>Harga</label>
    <input type="number" name="harga" required>

    <button type="submit">Simpan</button>

</form>

</div>

</body>
</html>
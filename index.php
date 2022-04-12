<?php 
require 'function.php';//memanngil file
$anggota = query( "SELECT * FROM tbanggota" );

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Anggota</h1>

    <a href="tambah.php">Tambah data anggota</a>
    <br><br> 

    <table border="1" cellpadding="10" cellspasing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>No.Hp</th>
            <th>Email</th>
        </tr>

    <?php $i = 1; ?>
    <?php foreach( $anggota as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick=" return confirm('yakin?');">hapus</a>
            </td>
            <td><img src="image/<?= $row["gambar"]; ?>"width="50">
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nhp"]; ?></td>
            <td><?= $row["email"]; ?></td>
            
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</body>
</html>
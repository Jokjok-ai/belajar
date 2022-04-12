<?php 
// koneksi ke DBMS
require 'function.php';

// cek data apakah tombol submit sudah ditekan
if ( isset($_POST["submit"]) ){
 //cek apakah data berhasil ditambahkan atau tidal
 if( tambah($_POST) > 0 ) {
    echo "
    <script>
        alert('data berhasil ditambahkan');
        document.location.href= 'index.php';
    </script>
    ";
    } else {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href= 'index.php';
        </script>
        ";

    }
} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah data anggota</h1>

    <form method="post" action="">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nhp">No.Hp</label>
                <input type="text" name="nhp" id="nhp" required>
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data </button>
            </li>
        </ul>
    </form>


</body>
</html>
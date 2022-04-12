<?php 

//koneksi ke database
$conn= mysqli_connect("localhost", "root", "", "dbnyawiji");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;

}

function tambah($data) {
    global $conn;
    //ambil data tiap elemen form
    $nama = htmlspecialchars($data["nama"]);
    $hp = htmlspecialchars($data["nhp"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //query insert data
    $query = "INSERT INTO tbanggota
        VALUES
        ('', '$nama', '$hp', '$email', '$gambar')";
        mysqli_query($conn, $query);
       
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tbanggota WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>
<?php
include 'koneksi.php';

// PROSES SIMPAN DATA
if (isset($_POST['simpan'])) {
    $nama  = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $hp    = mysqli_real_escape_string($koneksi, $_POST['handphone']);

    $sql = "INSERT INTO tabel_data (nama, email, handphone) VALUES ('$nama', '$email', '$hp')";
    
    if (mysqli_query($koneksi, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

// PROSES HAPUS DATA
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    
    $sql = "DELETE FROM tabel_data WHERE nomor = '$id'";
    
    if (mysqli_query($koneksi, $sql)) {
        header("Location: index.php");
    } else {
        echo "Gagal menghapus: " . mysqli_error($koneksi);
    }
}
?>
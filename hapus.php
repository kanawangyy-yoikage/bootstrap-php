<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM tabel_data WHERE nomor = '$id'";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data.";
}
?>
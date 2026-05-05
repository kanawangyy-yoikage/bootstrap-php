<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['handphone'];

    $query = "INSERT INTO tabel_data (nama, email, handphone) VALUES ('$nama', '$email', '$hp')";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        header("Location: index.php");
    } else {
        echo "Gagal menyimpan data.";
    }
}
?>
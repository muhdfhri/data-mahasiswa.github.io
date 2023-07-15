<?php
include "koneksi.php";
$nama = $_POST['nama_mahasiswa'];
$jenis = $_POST['jenis_kelamin'];
$asal = $_POST['asal_daerah'];
$jurusan = $_POST['jurusan'];

$query = "INSERT INTO mahasiswa(nama_mahasiswa, jenis_kelamin, asal_daerah, jurusan)
          VALUES ('$nama', '$jenis', '$asal', '$jurusan')";
$result = mysqli_query($kon, $query);

if ($result) {
    echo "<script>alert('Data mahasiswa berhasil ditambahkan');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
} else {
    die(mysqli_error($kon));
}
?>

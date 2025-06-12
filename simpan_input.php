<?php
include_once "koneksi.php";

$id = $_POST['id_kendaraan'] ?? '';
$merk = $_POST['merk'] ?? '';
$tipe = $_POST['tipe'] ?? '';
$tahun = $_POST['tahun'] ?? '';
$plat = $_POST['plat'] ?? '';
$tanggal_masuk = $_POST['tanggal_masuk'] ?? '';

$query = "INSERT INTO unit_kendaraan (id_kendaraan, merk, tipe, tahun, plat, tanggal_masuk) 
          VALUES ('$merk', '$tipe', '$tahun', '$plat', '$tanggal_masuk')";

if (mysqli_query($conn, $query)) {
    echo "Data berhasil disimpan. <a href='halaman_lihat.php'>Lihat Data</a>";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($conn);
}
?>
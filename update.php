<?php
include "koneksi.php";
$id = $_POST['id'];
$merk = $_POST['merk'];
$tipe = $_POST['tipe'];
$tahun = $_POST['tahun'];
$plat = $_POST['plat'];
$tanggal = $_POST['tanggal_masuk'];

$query = "UPDATE unit_kendaraan SET merk='$merk', tipe='$tipe', tahun='$tahun', plat='$plat', tanggal_masuk='$tanggal' WHERE id_kendaraan=$id";
mysqli_query($conn, $query);
header("Location: halaman_lihat.php");
?>

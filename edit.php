<?php
include "koneksi.php";
$id = $_GET['unit_kendaraan'];
$query = mysqli_query($conn, "SELECT * FROM unit_kendaraan WHERE id_kendaraan=$id");
$data = mysqli_fetch_assoc($query);
?>
<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?= $data['id_kendaraan']; ?>">
    Merk: <input type="text" name="merk" value="<?= $data['merk']; ?>"><br>
    Tipe: <input type="text" name="tipe" value="<?= $data['tipe']; ?>"><br>
    Tahun: <input type="text" name="tahun" value="<?= $data['tahun']; ?>"><br>
    Plat: <input type="text" name="plat" value="<?= $data['plat']; ?>"><br>
    Tanggal Masuk: <input type="date" name="tanggal_masuk" value="<?= $data['tanggal_masuk']; ?>"><br>
    <input type="submit" value="Update">
</form>

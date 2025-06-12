<?php
include_once "koneksi.php";
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    echo "Akses ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.";
    exit;
}
?>

?>
<!DOCTYPE html>
<fieldset><legend>Form Input Data Kendaraan</legend>
<form action="simpan_input.php" method="get">
    <table>
        <tr><td>Merk Kendaraan</td><td>:</td><td><input type="text" name="merk" required></td></tr>
        <tr><td>Tipe Kendaraan</td><td>:</td><td><input type="text" name="tipe" required></td></tr>
        <tr><td>Tahun Kendaraan</td><td>:</td><td><input type="text" name="tahun" required></td></tr>
        <tr><td>Plat Kendaraan</td><td>:</td><td><input type="text" name="plat" required></td></tr>
        <tr><td>Tanggal Masuk</td><td>:</td><td><input type="date" name="tanggal_masuk" required></td></tr>
        <tr><td colspan="3">
            <input type="submit" value="Simpan">
            <input type="reset" value="Batal">
            <button><a href="index.php">Kembali</a></button>
            <!-- <input type="button" value="Lihat Semua" onclick="window.location.href='halaman_lihat.php';">
            <input type="button" value="Lihat per Tahun" onclick="window.location.href='halaman_lihat_tahun.php';"> -->
        </td></tr>
    </table>
</form>
</fieldset>
</html>

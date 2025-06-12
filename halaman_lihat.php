<?php
include_once "koneksi.php";
$result = mysqli_query($conn, "SELECT * FROM unit_kendaraan");
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    echo "Akses ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.";
    exit;
}
echo "<h3>Data Kendaraan</h3>";
echo "<table border='1'>
<tr>
    <th>id kendaraan</th>
    <th>Merk</th>
    <th>Tipe</th>
    <th>Tahun</th>
    <th>Plat</th>
    <th>Tanggal Masuk</th>

</tr>";
$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
    $unit_kendaraan = $row['id_kendaraan'];
    echo "<tr>
        <td>{$row['id_kendaraan']}</td>
        <td>{$row['merk']}</td>
        <td>{$row['tipe']}</td>
        <td>{$row['tahun']}</td>
        <td>{$row['plat']}</td>
        <td>{$row['tanggal_masuk']}</td>
        <td><a href='edit.php?unit_kendaraan=$unit_kendaraan'>edit Kendaraan</a></td>
        <td><a href='hapus_kendaraan.php?unit_kendaraan=$unit_kendaraan'>Hapus Kendaraan</a></td>
    </tr>";
    $no++;
}
echo "</table>";
?>

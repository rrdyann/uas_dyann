<?php
include_once "koneksi.php";session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    echo "Akses ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.";
    exit;
}

$tahun_filter = $_GET['tahun'] ?? '';

echo "<form method='get'>
    <label>Masukkan Tahun: </label>
    <input type='text' name='tahun' value='$tahun_filter' required>
    <input type='submit' value='Tampilkan'>
</form>";

if (!empty($tahun_filter)) {
    $query = "SELECT * FROM unit_kendaraan WHERE tahun = '$tahun_filter'";
    $result = mysqli_query($conn, $query);

    echo "<h3>Data Kendaraan Tahun $tahun_filter</h3>";
    echo "<table border='1'>
    <tr>
        <th>id kendaraan</th>
        <th>Merk</th>
        <th>Tipe</th>
        <th>Plat</th>
        <th>Tanggal Masuk</th>
    </tr>";
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['id_kendaraan']}</td>
            <td>{$row['merk']}</td>
            <td>{$row['tipe']}</td>
            <td>{$row['plat']}</td>
            <td>{$row['tanggal_masuk']}</td>
        </tr>";
        $no++;
    }
    echo "</table>";
}
?>

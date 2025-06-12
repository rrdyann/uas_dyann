<?php
include "koneksi.php";
if (isset($_GET['unit_kendaraan'])) {
    $unit_kendaraan = $_GET['unit_kendaraan'];

    $query = "DELETE FROM unit_kendaraan WHERE id_kendaraan = ?";
    $stmt = mysqli_prepare($conn, $query);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $unit_kendaraan); // "s" untuk string
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}
// Delay 1 detik sebelum redirect
sleep(1);
header("Location: halaman_lihat.php");
exit;
?>
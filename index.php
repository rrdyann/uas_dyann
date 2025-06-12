<?php
include_once "koneksi.php";
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    echo '<!DOCTYPE html>
    <head></head>
    <body>
        <fieldset>
            <legend>Mobilindo</legend>
            <p>Silakan Pilih Menu</p>
            <div class="menu-buttons">
                <form action="halaman_input.php" method="get">
                    <button type="submit">Input Mobil</button>
                </form>
                <form action="halaman_lihat.php" method="get">
                    <button type="submit">Lihat Mobil</button>
                </form>
                <form action="halaman_lihat_tahun.php" method="get">
                    <button type="submit">Lihat Mobil Berdasarkan Tahun</button>
                </form>
            </div>
        </fieldset>
    </body>
    </html>';  
} else {
    echo '<!DOCTYPE html>
    <head></head>
    <body>
        <fieldset>
            <legend>Mobilindo</legend>
            <p>Silakan Pilih Menu</p>
            <div class="menu-buttons">
                <form action="halaman_input.php" method="get">
                    <button type="submit">Input Mobil</button>
                </form>
                <form action="halaman_lihat.php" method="get">
                    <button type="submit">Lihat Mobil</button>
                </form>
                <form action="halaman_lihat_tahun.php" method="get">
                    <button type="submit">Lihat Mobil Berdasarkan Tahun</button>
                </form>
            </div>
        </fieldset>
    </body>
    </html>';
}
?>
<?php
session_start();

// Memeriksa apakah pengguna telah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit();
}

// Menampilkan halaman cetak.php milik Anda
echo "<h2>Halo, " . $_SESSION['username'] . "! Selamat datang di halaman web kami</h2>";
?>

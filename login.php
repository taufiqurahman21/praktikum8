<?php
session_start();
// Konfigurasi database
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'latihan';
// Menghubungkan ke database
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
// Memvalidasi login
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login berhasil, simpan informasi ke sesi
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;

        header("Location: cetak.php");
        exit();
    } else {
        // Login gagal
        echo "Login gagal. Silakan coba lagi.";
    }
}
$conn->close();
?>
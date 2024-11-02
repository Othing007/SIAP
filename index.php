<?php
session_start();

// Mengatur error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Memastikan file header dan sidebar ada
if (file_exists('src/components/header.php')) {
    require_once 'src/components/header.php';
} else {
    die("Header file not found.");
}

if (file_exists('src/components/sidebar.php')) {
    require_once 'src/components/sidebar.php';
} else {
    die("Sidebar file not found.");
}

// Halaman utama
echo "<h1>Selamat Datang di Sistem Informasi</h1>";

// Memastikan file footer ada
if (file_exists('src/components/footer.php')) {
    require_once 'src/components/footer.php';
} else {
    die("Footer file not found.");
}

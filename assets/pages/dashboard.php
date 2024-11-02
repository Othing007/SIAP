<?php
// Memulai sesi
session_start();

// Mengimpor komponen header
require_once '../components/header.php';

// Mengimpor komponen sidebar
require_once '../components/sidebar.php';

// Menampilkan judul dashboard
echo "<h1>Dashboard</h1>";

// Menampilkan konten dashboard (opsional)
echo "<p>Selamat datang di dashboard Anda! Di sini Anda dapat mengelola berbagai pengaturan dan melihat informasi penting.</p>";

// Mengimpor komponen footer
require_once '../components/footer.php';

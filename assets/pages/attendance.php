<?php
session_start();
require_once '../components/header.php';
require_once '../components/sidebar.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Konten untuk halaman attendance
echo "<h1>Attendance Management</h1>";
?>

<form method="POST">
    <button name="action" value="clock_in">Clock In</button>
    <button name="action" value="clock_out">Clock Out</button>
</form>

<?php require_once '../components/footer.php'; ?>

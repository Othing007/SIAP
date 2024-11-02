<?php
session_start();
require_once '../components/header.php';
require_once '../components/sidebar.php';

// Cek apakah pengguna adalah admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    echo "Akses ditolak. Halaman ini hanya dapat diakses oleh admin.";
    exit;
}

// Konten halaman Employee Management
echo "<h1>Employee Management</h1>";
?>

<!-- Formulir pencarian karyawan -->
<form method="GET" action="employee-management.php">
    <input type="text" name="search" placeholder="Cari karyawan...">
    <button type="submit">Cari</button>
</form>

<?php
// Mengambil parameter pencarian
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Persiapkan dan eksekusi query pencarian
$stmt = $conn->prepare("SELECT * FROM employees WHERE name LIKE ?");
$search_param = "%$search%";
$stmt->bind_param("s", $search_param);
$stmt->execute();
$result = $stmt->get_result();
?>

<!-- Tabel untuk menampilkan hasil karyawan -->
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Departemen</th>
            <th>Jabatan</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['department']); ?></td>
                <td><?php echo htmlspecialchars($row['job_title']); ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php
// Mengimpor komponen footer
require_once '../components/footer.php';
?>
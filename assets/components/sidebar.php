<aside>
    <nav>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <li><a href="employee-management.php">Employee Management</a></li>
                <li><a href="Configuration.php">Configuration</a></li>
            <?php endif; ?>
            <li><a href="attendance.php">Attendance</a></li>
            <li><a href="document-management.php">Document Management</a></li>
            <li><a href="task-management.php">Task Management</a></li>
            <li><a href="reporting.php">Reporting</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
</aside>

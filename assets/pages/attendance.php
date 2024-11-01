<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIAP - Attendance Management</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
  <div class="container">
    <header>
      <nav>
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Documents</a></li>
          <li><a href="#">Employees</a></li>
          <li><a href="#">Attendance</a></li>
          <li><a href="#">Tasks</a></li>
          <li><a href="#">Reports</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section>
        <h1>Attendance Management</h1>
        <div class="attendance-actions">
          <button class="btn btn-primary">Clock In</button>
          <button class="btn btn-primary">Clock Out</button>
          <div class="search-box">
            <input type="text" placeholder="Search attendance records">
            <button class="btn btn-secondary">Search</button>
          </div>
        </div>
        <table class="attendance-table">
          <thead>
            <tr>
              <th>Employee</th>
              <th>Date</th>
              <th>Clock In</th>
              <th>Clock Out</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- Attendance data will be dynamically added here -->
          </tbody>
        </table>
      </section>
    </main>

    <script src="../assets/js/attendance-management.js"></script>
  </div>
</body>
</html>
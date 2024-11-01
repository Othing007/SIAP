<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIAP - Reporting</title>
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
        <h1>Reporting</h1>
        <div class="report-actions">
          <select class="report-type">
            <option value="employee">Employee Report</option>
            <option value="attendance">Attendance Report</option>
            <option value="task">Task Report</option>
          </select>
          <button class="btn btn-primary">Generate Report</button>
        </div>
        <div class="report-container">
          <!-- Report content will be dynamically generated here -->
        </div>
      </section>
    </main>

    <script src="../assets/js/reporting.js"></script>
  </div>
</body>
</html>
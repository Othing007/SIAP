<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIAP Dashboard</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
  <div class="dashboard-container">
    <header class="dashboard-header">
      <h1>SIAP Dashboard</h1>
      <div class="user-info">
        <img src="../assets/img/user-avatar.png" alt="User Avatar" class="user-avatar">
        <span class="user-name">John Doe</span>
      </div>
    </header>

    <main class="dashboard-content">
      <div class="dashboard-overview">
        <div class="overview-card">
          <h3>Total Employees</h3>
          <span class="metric-value">125</span>
        </div>
        <div class="overview-card">
          <h3>Total Documents</h3>
          <span class="metric-value">1,234</span>
        </div>
        <div class="overview-card">
          <h3>Pending Tasks</h3>
          <span class="metric-value">42</span>
        </div>
        <div class="overview-card">
          <h3>Attendance Rate</h3>
          <span class="metric-value">92%</span>
        </div>
      </div>

      <div class="dashboard-charts">
        <div class="chart-container">
          <h3>Employee Attendance</h3>
          <canvas id="attendanceChart"></canvas>
        </div>
        <div class="chart-container">
          <h3>Document Activity</h3>
          <canvas id="documentChart"></canvas>
        </div>
      </div>
    </main>

    <footer class="dashboard-footer">
      <p>&copy; 2023 SIAP. All rights reserved.</p>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIAP - Administrative Information System</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <div class="app-container">
    <header class="app-header">
      <div class="header-left">
        <a href="#" class="logo">SIAP</a>
        <nav class="main-nav">
          <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Documents</a></li>
            <li><a href="#">Employees</a></li>
            <li><a href="#">Attendance</a></li>
            <li><a href="#">Tasks</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Configuration</a></li>
          </ul>
        </nav>
      </div>
      <div class="header-right">
        <div class="user-info">
          <img src="assets/img/user-avatar.png" alt="User Avatar" class="user-avatar">
          <span class="user-name">John Doe</span>
        </div>
        <button class="btn btn-primary">Log Out</button>
      </div>
    </header>

    <main class="app-content">
      <section class="dashboard-overview">
        <h2>Dashboard Overview</h2>
        <div class="overview-cards">
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
      </section>

      <section class="recent-activities">
        <h2>Recent Activities</h2>
        <div class="activity-list">
          <div class="activity-item">
            <div class="activity-icon">
              <i class="fas fa-file-upload"></i>
            </div>
            <div class="activity-details">
              <h4>New Document Uploaded</h4>
              <p>John Doe uploaded a new document "Annual Report 2022"</p>
              <span class="activity-time">2 hours ago</span>
            </div>
          </div>
          <div class="activity-item">
            <div class="activity-icon">
              <i class="fas fa-tasks"></i>
            </div>
            <div class="activity-details">
              <h4>Task Completed</h4>
              <p>Jane Smith completed the task "Prepare quarterly financials"</p>
              <span class="activity-time">1 day ago</span>
            </div>
          </div>
          <div class="activity-item">
            <div class="activity-icon">
              <i class="fas fa-clock"></i>
            </div>
            <div class="activity-details">
              <h4>Attendance Update</h4>
              <p>Michael Johnson clocked in late for work</p>
              <span class="activity-time">3 days ago</span>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="app-footer">
      <p>&copy; 2023 SIAP. All rights reserved.</p>
    </footer>
  </div>

  <script src="assets/js/index.js"></script>
</body>
</html>
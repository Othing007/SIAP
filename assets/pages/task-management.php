<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIAP - Task Management</title>
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
        <h1>Task Management</h1>
        <div class="task-actions">
          <button class="btn btn-primary">Create Task</button>
          <div class="search-box">
            <input type="text" placeholder="Search tasks">
            <button class="btn btn-secondary">Search</button>
          </div>
        </div>
        <table class="task-table">
          <thead>
            <tr>
              <th>Task Name</th>
              <th>Assigned To</th>
              <th>Due Date</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Task data will be dynamically added here -->
          </tbody>
        </table>
      </section>
    </main>

    <script src="../assets/js/task-management.js"></script>
  </div>
</body>
</html>
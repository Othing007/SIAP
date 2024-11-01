<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIAP - Employee Management</title>
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
        <h1>Employee Management</h1>
        <div class="employee-actions">
          <button class="btn btn-primary">Add Employee</button>
          <div class="search-box">
            <input type="text" placeholder="Search employees">
            <button class="btn btn-secondary">Search</button>
          </div>
        </div>
        <table class="employee-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Department</th>
              <th>Job Title</th>
              <th>Hire Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Employee data will be dynamically added here -->
          </tbody>
        </table>
      </section>
    </main>

    <script src="../assets/js/employee-management.js"></script>
  </div>
</body>
</html>
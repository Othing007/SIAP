<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIAP - Document Management</title>
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
        <h1>Document Management</h1>
        <div class="document-actions">
          <button class="btn btn-primary">Upload Document</button>
          <div class="search-box">
            <input type="text" placeholder="Search documents">
            <button class="btn btn-secondary">Search</button>
          </div>
        </div>
        <table class="document-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Category</th>
              <th>Status</th>
              <th>Uploaded On</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Document data will be dynamically added here -->
          </tbody>
        </table>
      </section>
    </main>

    <script src="../assets/js/document-management.js"></script>
  </div>
</body>
</html>
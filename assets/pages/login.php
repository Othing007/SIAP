<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIAP - Login</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
  <div class="login-container">
    <div class="login-card">
      <h2>Welcome to SIAP</h2>
      <form id="loginForm">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label>
            <input type="checkbox" name="rememberMe"> Remember Me
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      <div id="errorMessage" class="error-message"></div>
    </div>
  </div>

  <script src="../assets/js/login.js"></script>
</body>
</html>
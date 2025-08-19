<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Safe Space Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="body-login">

  <div class="login-container">
    <h2>Login</h2>
    <form id="loginForm">
      <div class="input-group">
        <label>Email</label>
        <input type="email" placeholder="username@gmail.com" required>
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" placeholder="Password" required>
      </div>
      <div class="forgot-password"><a href="reset-password.php">Forgot Password?</a></div>
      <button type="submit" class="sign-in-btn">Sign in</button>
    </form>

    <div class="or">or continue with</div>
    <div class="social-login">
      <button onclick="window.location.href='https://accounts.google.com/'">
        <img src="https://image.similarpng.com/file/similarpng/very-thumbnail/2020/06/Logo-google-icon-PNG.png" width="20">
      </button>
      <button onclick="window.location.href='https://facebook.com/'">
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Facebook_icon.svg" width="20">
      </button>
    </div>

    <div class="register">
      Don’t have an account yet? <a href="register.php">Register for free</a>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
      event.preventDefault();
      window.location.href = "homepage.php";
    });
  </script>

</body>
</html>

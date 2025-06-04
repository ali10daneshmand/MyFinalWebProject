<!DOCTYPE html>
<html lang="en" style="height:100%;">
<head>
  <meta charset="UTF-8">
  <title>User Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: radial-gradient(circle at top right, #e3f2fd, #ffffff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background: #fff;
      padding: 2.5rem;
      border-radius: 18px;
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 420px;
    }

    .login-box h2 {
      font-weight: 600;
      color: #0d6efd;
    }

    .form-label {
      font-weight: 500;
    }

    .footer-link {
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2 class="text-center mb-4">Welcome Back</h2>
    <form method="POST" action="/webexam/login" autocomplete="off">
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email" class="form-control" required>
      </div>
      <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>
      <div class="text-center mt-3 footer-link">
        New here? <a href="/webexam/register">Create an Account</a>
      </div>
    </form>
  </div>
</body>
</html>

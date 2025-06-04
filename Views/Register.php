<!DOCTYPE html>
<html lang="en" style="height:100%;">
<head>
  <meta charset="UTF-8">
  <title>Create Account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: radial-gradient(circle at top left, #e3f2fd, #ffffff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .register-box {
      background: #fff;
      padding: 2.5rem 2rem;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 420px;
    }

    .register-box h2 {
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
  <div class="register-box">
    <h2 class="text-center mb-4">Create an Account</h2>
    <form method="POST" action="/webexam/register" autocomplete="off">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Choose Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>
      <div class="mb-4">
        <label for="confirm" class="form-label">Repeat Password</label>
        <input type="password" name="confirm_password" id="confirm" class="form-control" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
      <div class="text-center mt-3 footer-link">
        Already registered? <a href="/webexam/login">Sign In</a>
      </div>
    </form>
  </div>
</body>
</html>

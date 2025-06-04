<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Page Not Found - 404</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    /* Reset some default margins */
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #fff7f8;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    nav.navbar {
      background-color: #fff;
      border-bottom: 1px solid #dee2e6;
      box-shadow: 0 3px 8px rgb(220 53 69 / 0.15);
    }
    .navbar-brand {
      font-weight: 700;
      color: #c82333;
      letter-spacing: 1.2px;
      font-size: 1.5rem;
    }
    .navbar-nav.center-nav {
      margin: 0 auto;
    }
    .navbar-nav .nav-link {
      color: #6c757d;
      transition: color 0.3s ease;
    }
    .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
      color: #c82333;
      font-weight: 600;
    }
    .btn-outline-primary {
      border-color: #c82333;
      color: #c82333;
    }
    .btn-outline-primary:hover {
      background-color: #c82333;
      color: #fff;
    }
    .btn-primary {
      background-color: #c82333;
      border-color: #c82333;
    }
    .btn-primary:hover {
      background-color: #a71d2a;
      border-color: #a71d2a;
    }

    main.error-page {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      text-align: center;
      background: linear-gradient(45deg, #ffe1e6, #fff7f8);
    }
    .error-wrapper {
      max-width: 480px;
      padding: 30px 20px;
      background-color: #fff0f2;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(200, 35, 51, 0.2);
      border: 1px solid #f5c6cb;
    }
    .error-code {
      font-size: 9rem;
      font-weight: 900;
      color: #c82333;
      line-height: 1;
      margin-bottom: 10px;
      font-family: 'Segoe UI Black', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .error-message {
      font-size: 1.4rem;
      color: #721c24;
      margin-bottom: 25px;
      font-weight: 600;
    }
    .btn-back-home {
      background-color: #c82333;
      border: none;
      padding: 10px 25px;
      font-size: 1rem;
      border-radius: 6px;
      color: white;
      transition: background-color 0.3s ease;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 4px 10px rgb(200 35 51 / 0.3);
    }
    .btn-back-home:hover {
      background-color: #a71d2a;
      text-decoration: none;
      color: white;
      box-shadow: 0 6px 15px rgb(167 29 42 / 0.5);
    }

    footer {
      background-color: #2f2f2f;
      color: #ccc;
      padding: 20px 0;
      text-align: center;
      font-size: 0.9rem;
    }
    footer a {
      color: #bbb;
      margin: 0 10px;
      font-size: 1.2rem;
      transition: color 0.3s ease;
    }
    footer a:hover {
      color: #fff;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">MyWebsite</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav center-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="/webexam/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/webexam/post">Posts</a></li>
          <li class="nav-item"><a class="nav-link" href="/webexam/dashboard">Dashboard</a></li>
        </ul>
        <div class="d-flex gap-2">
          <a href="/webexam/login" class="btn btn-outline-primary">Login</a>
          <a href="/webexam/register" class="btn btn-primary">Register</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="error-page">
    <div class="error-wrapper">
      <div class="error-code">404</div>
      <div class="error-message">Sorry, the page you are looking for cannot be found.</div>
      <a href="/webexam/" class="btn-back-home">
        <i class="fas fa-arrow-left"></i> Return Home
      </a>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 MyWebsite. All rights reserved.</p>
    <div>
      <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
      <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

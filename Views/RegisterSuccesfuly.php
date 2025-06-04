<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome Aboard!</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column justify-content-center align-items-center bg-white vh-100">

  <main class="text-center">
    <div class="border rounded-4 shadow-lg p-5 bg-body">
      <h2 class="text-primary mb-3">✅ You're All Set!</h2>
      <p class="fs-5">Your account has been successfully created. Let’s get started!</p>
      <a href="/webexam/" class="btn btn-outline-success mt-4">Return to Homepage</a>
    </div>
  </main>

  <footer class="position-absolute bottom-0 w-100 text-center text-muted py-2 bg-light border-top">
    &copy; <?= date('Y') ?> MyWebPlatform. Crafted with ❤️
  </footer>

</body>
</html>

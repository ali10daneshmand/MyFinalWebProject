<?php
use App\Model\Post;

session_start();

$username = $_SESSION['user']['username'] ?? 'Guest';
$email = $_SESSION['user']['email'] ?? 'guest@example.com';
$userId = $_SESSION['user']['id'] ?? 0;

// دریافت پست‌های کاربر فعلی
$posts = Post::where('user_id', $userId)->get();

include "header.php";
?>

<main>
  <div class="container py-5">
    <div class="row">
      
      <!-- پروفایل کاربر -->
      <aside class="col-md-3">
        <div class="card shadow-sm rounded bg-white p-3 text-center">
          <div class="mb-4">
            <i class="fas fa-user-circle fa-5x text-primary"></i>
          </div>
          <h4 class="mb-1"><?= htmlspecialchars($username) ?></h4>
          <p class="text-muted small mb-3"><?= htmlspecialchars($email) ?></p>
          <a href="/webexam/logout" class="btn btn-outline-danger btn-sm">
            <i class="fas fa-sign-out-alt me-1"></i> Logout
          </a>
        </div>
      </aside>

      <!-- جدول پست‌ها -->
      <section class="col-md-9">
        <div class="card shadow-sm">
          <header class="card-header bg-primary text-white">
            <h5 class="mb-0">My Posts</h5>
          </header>
          <div class="card-body">
            <?php if (!empty($posts) && count($posts) > 0): ?>
              <table class="table table-striped align-middle mb-0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th class="text-end">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($posts as $index => $post): ?>
                    <tr>
                      <td><?= $index + 1 ?></td>
                      <td><?= htmlspecialchars($post->title) ?></td>
                      <td class="text-end">
                        <a href="/webexam/post/show?id=<?= $post->id ?>" class="btn btn-sm btn-info me-1" title="View Post">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a href="/webexam/post/edit?id=<?= $post->id ?>" class="btn btn-sm btn-warning me-1" title="Edit Post">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="/webexam/post/delete?id=<?= $post->id ?>" 
                           onclick="return confirm('Are you sure you want to delete this post?');" 
                           class="btn btn-sm btn-danger" title="Delete Post">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            <?php else: ?>
              <p class="text-muted">You have no posts yet.</p>
            <?php endif; ?>

            <a href="/webexam/post/create" class="btn btn-success mt-4">
              <i class="fas fa-plus me-2"></i> Add New Post
            </a>
          </div>
        </div>
      </section>

    </div>
  </div>
</main>

<?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

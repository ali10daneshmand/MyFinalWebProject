<?php include_once __DIR__ . '/../header.php'; ?>

<main style="flex: 1;">
  <div class="container py-5">

    <section class="mb-4 d-flex justify-content-between align-items-center">
      <h3 class="fw-bold mb-0">Ranked Posts (Eigenvector)</h3>
      <small class="text-muted fst-italic">Sorted by importance score</small>
    </section>

    <section class="card shadow-sm rounded">
      <div class="card-body p-4">
        <?php if (!empty($rankedPosts)): ?>
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Post Title</th>
                  <th scope="col">Score</th>
                  <th scope="col" class="text-end">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($rankedPosts as $index => $item): ?>
                  <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($item['post']->title) ?></td>
                    <td><?= number_format($item['score'], 4) ?></td>
                    <td class="text-end">
                      <a href="/webexam/post/show?id=<?= $item['post']->id ?>" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye me-1"></i> Show
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php else: ?>
          <div class="alert alert-info text-center mb-0">
            <i class="fas fa-info-circle me-2"></i> No posts to display.
          </div>
        <?php endif; ?>
      </div>
    </section>

  </div>
</main>

<?php include_once __DIR__ . '/../footer.php'; ?>

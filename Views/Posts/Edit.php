<?php include_once __DIR__ . '/../header.php'; ?>

<main class="py-5" style="flex: 1;">
  <div class="container">
    <h2 class="fw-semibold mb-4">Edit Post</h2>

    <form action="/webexam/post/update" method="POST" class="p-4 border rounded shadow-sm bg-white" novalidate>
      <input type="hidden" name="id" value="<?= htmlspecialchars($post->id) ?>">

      <div class="mb-3">
        <label for="title" class="form-label fw-semibold">Title</label>
        <input 
          type="text" 
          name="title" 
          id="title" 
          class="form-control" 
          value="<?= htmlspecialchars($post->title) ?>" 
          required
          minlength="3"
          maxlength="255"
          placeholder="Enter post title"
          autofocus
        >
      </div>

      <div class="mb-3">
        <label for="body" class="form-label fw-semibold">Content</label>
        <textarea 
          name="body" 
          id="body" 
          rows="5" 
          class="form-control" 
          required
          minlength="10"
          placeholder="Write your post content here..."
        ><?= htmlspecialchars($post->body) ?></textarea>
      </div>

      <div class="d-flex justify-content-between">
        <a href="/webexam/dashboard" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</main>

<?php include_once __DIR__ . '/../footer.php'; ?>

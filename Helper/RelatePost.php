<?php

// اتصال امن به پایگاه داده
try {
    $db = new PDO('mysql:host=localhost;dbname=webexam;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    exit("Database connection error: " . $ex->getMessage());
}

// واکشی شناسه تمام پست‌ها
$postList = $db->query("SELECT id FROM posts")->fetchAll(PDO::FETCH_COLUMN);

// آماده‌سازی کوئری درج
$query = $db->prepare("INSERT INTO related_posts (post_1_id, post_2_id) VALUES (:p1, :p2)");

foreach ($postList as $currentId) {
    // فیلتر پست‌های غیر از خودش
    $candidates = array_values(array_filter($postList, fn($id) => $id !== $currentId));
    shuffle($candidates); // ترتیب تصادفی

    // انتخاب ۳ پست مرتبط به طور تصادفی
    $selected = array_slice($candidates, 0, 3);

    foreach ($selected as $relId) {
        try {
            $query->execute([
                ':p1' => $currentId,
                ':p2' => $relId
            ]);
        } catch (PDOException $ex) {
            echo "❌ Insert error for $currentId → $relId: " . $ex->getMessage() . "\n";
        }
    }
}

echo "✅ داده‌های مرتبط به‌صورت تصادفی وارد جدول related_posts شدند.";

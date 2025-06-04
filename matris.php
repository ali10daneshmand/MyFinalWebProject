<?php
$pdo = new PDO("mysql:host=localhost;dbname=webexam", "root", "");

// گام اول: دریافت شناسه‌ همه پست‌ها
$allPostIds = [];
$result = $pdo->query("SELECT id FROM posts");
foreach ($result as $record) {
    $allPostIds[] = $record['id'];
}

// گام دوم: دریافت روابط میان پست‌ها از جدول related_posts
$postRelations = [];
$query = $pdo->query("SELECT * FROM related_posts");
foreach ($query as $link) {
    $postRelations[$link['post_1_id']][] = $link['post_2_id'];
    $postRelations[$link['post_2_id']][] = $link['post_1_id']; // رابطه دوطرفه
}

// گام سوم: گرفتن تعداد بازدیدهای هر پست
$postViews = [];
$viewData = $pdo->query("SELECT * FROM post_views");
foreach ($viewData as $view) {
    $postViews[$view['post_id']] = (int)$view['views'];
}

// گام چهارم: ساخت ماتریس احتمال
$probabilityMatrix = [];

foreach ($allPostIds as $currentPost) {
    $probRow = [];

    if (empty($postRelations[$currentPost])) {
        // اگر رابطه‌ای نداره، مقدار همه صفر میشه
        foreach ($allPostIds as $targetPost) {
            $probRow[$targetPost] = 0;
        }
    } else {
        $neighbors = $postRelations[$currentPost];
        $totalNeighborViews = 0;

        foreach ($neighbors as $neighborPost) {
            $totalNeighborViews += $postViews[$neighborPost] ?? 0;
        }

        foreach ($allPostIds as $targetPost) {
            if (in_array($targetPost, $neighbors) && $totalNeighborViews > 0) {
                $probRow[$targetPost] = round(($postViews[$targetPost] ?? 0) / $totalNeighborViews, 4);
            } else {
                $probRow[$targetPost] = 0;
            }
        }
    }

    $probabilityMatrix[$currentPost] = $probRow;
}

// گام پنجم: چاپ ماتریس به صورت خوانا
echo "<pre>";
foreach ($probabilityMatrix as $postId => $rowValues) {
    echo "Post {$postId} → ";
    foreach ($rowValues as $relatedId => $value) {
        echo "[{$relatedId}: {$value}] ";
    }
    echo "\n";
}
echo "</pre>";

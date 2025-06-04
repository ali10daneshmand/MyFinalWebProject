<?php

$dbHost = 'localhost';
$dbName = 'webfinal';
$dbUser = 'root';
$dbPass = '';

try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // واکشی شناسه‌ی تمام پست‌ها
    $postList = $conn->query("SELECT id FROM posts")->fetchAll(PDO::FETCH_ASSOC);

    $insertView = $conn->prepare("
        INSERT INTO post_views (post_id, views) 
        VALUES (:pid, :viewCount)
    ");

    $inserted = 0;

    foreach ($postList as $p) {
        $id = $p['id'];
        $randomViews = random_int(100, 1000);

        $insertView->execute([
            ':pid' => $id,
            ':viewCount' => $randomViews
        ]);

        $inserted++;
    }

    echo "📊 تعداد $inserted بازدید برای پست‌ها اضافه شد.";

} catch (PDOException $ex) {
    echo "⛔️ خطا هنگام اجرای عملیات: " . $ex->getMessage();
}

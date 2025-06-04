<?php

$dbHost = 'localhost';
$dbName = 'webexam';
$dbUser = 'root';
$dbPass = '';

try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // دریافت کاربران همراه با نام
    $userList = $conn->query("SELECT id, name FROM users")->fetchAll(PDO::FETCH_ASSOC);

    // آماده‌سازی دستور درج
    $insert = $conn->prepare("
        INSERT INTO posts (user_id, title, body, created_at, updated_at) 
        VALUES (:uid, :title, :content, NOW(), NOW())
    ");

    $total = 0;

    foreach ($userList as $user) {
        $uid = $user['id'];
        $uname = $user['name'];

        for ($n = 1; $n <= 5; $n++) {
            $postTitle = "Post $n by $uname";
            $postBody = "This is an auto-generated post number $n for user $uname.";

            $insert->execute([
                ':uid' => $uid,
                ':title' => $postTitle,
                ':content' => $postBody
            ]);

            $total++;
        }
    }

    echo "🟢 تعداد $total پست برای کاربران ثبت شد.";

} catch (PDOException $err) {
    die("❌ خطا در اتصال یا اجرا: " . $err->getMessage());
}

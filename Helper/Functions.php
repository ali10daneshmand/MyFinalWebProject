<?php

function renderView($file, $variables = [])
{
    $path = ROOT_PATH . '/Views/' . $file;

    if (file_exists($path)) {
        foreach ($variables as $key => $value) {
            $$key = $value; // تبدیل آرایه به متغیرهای مستقل
        }
        require_once($path);
    } else {
        require_once(ROOT_PATH . '/Views/404.php');
    }
}

function redirectTo($destination)
{
    header("Location: {$destination}");
    exit;
}

function userIsAuthenticated()
{
    return !empty($_SESSION['user']);
}

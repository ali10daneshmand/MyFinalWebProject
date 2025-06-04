<?php

session_start();

define('BASE_PATH', __DIR__);

require BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/helper/functions.php';

use App\Route;
use App\Controller\FrontController;
use App\Controller\AuthController;
use App\Controller\LogoutController;
use App\Controller\PostController;
use Illuminate\Database\Capsule\Manager as Capsule;

// تنظیمات اتصال پایگاه داده
$settings = require BASE_PATH . '/config/database.php';

$db = new Capsule();
$db->addConnection($settings);
$db->setAsGlobal();
$db->bootEloquent();

// تعریف مسیرها
$router = new Route();

// صفحات عمومی
$router->addRoute('GET', '/webexam/', [FrontController::class, 'home']);
$router->addRoute('GET', '/webexam/dashboard', [FrontController::class, 'dashboard']);
$router->addRoute('GET', '/webexam/register_successful', [FrontController::class, 'register_successful']);
$router->addRoute('GET', '/webexam/post/ranking', [FrontController::class, 'ranking']);

// ورود و ثبت‌نام
$router->addRoute('GET', '/webexam/login', [AuthController::class, 'login']);
$router->addRoute('POST', '/webexam/login', [AuthController::class, 'loginuser']);
$router->addRoute('GET', '/webexam/register', [AuthController::class, 'register']);
$router->addRoute('POST', '/webexam/register', [AuthController::class, 'storeuser']);
$router->addRoute('GET', '/webexam/logout', [LogoutController::class, 'handle']);

// مدیریت پست‌ها
$router->addRoute('GET', '/webexam/post', [PostController::class, 'index']);
$router->addRoute('GET', '/webexam/post/create', [PostController::class, 'create']);
$router->addRoute('POST', '/webexam/post/create', [PostController::class, 'store']);
$router->addRoute('GET', '/webexam/post/show', [PostController::class, 'show']);
$router->addRoute('GET', '/webexam/post/delete', [PostController::class, 'delete']);
$router->addRoute('GET', '/webexam/post/edit', [PostController::class, 'edit']);
$router->addRoute('POST', '/webexam/post/update', [PostController::class, 'update']);
$router->addRoute('GET', '/webexam/post/ranked', [PostController::class, 'ranked']);
$router->addRoute('GET', '/webexam/post/rankingpost', [PostController::class, 'rankedByEigen']);
$router->addRoute('GET', '/webexam/generate-relations', [PostController::class, 'generateRelations']);

// اجرای مسیردهی
$router->dispatch();

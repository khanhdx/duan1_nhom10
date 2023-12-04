<?php

use Ductong\BaseMvc\Controllers\Admin\UserController;
use Ductong\BaseMvc\Controllers\Admin\CategoryController;
use Ductong\BaseMvc\Controllers\Admin\DashboardController;
use Ductong\BaseMvc\Controllers\Admin\ProductController;
use Ductong\BaseMvc\Controllers\Admin\chitiethoadonController;
use Ductong\BaseMvc\Controllers\Admin\hoadonController;
use Ductong\BaseMvc\Controllers\Admin\nvghController;
use Ductong\BaseMvc\Controllers\Auth\LoginController;
use Ductong\BaseMvc\Controllers\Auth\LogoutController;
use Ductong\BaseMvc\Controllers\Client\HomeController;
use Ductong\BaseMvc\Controllers\Client\SanPhamController;
use Ductong\BaseMvc\Controllers\Client\ChiTietspController;
use Ductong\BaseMvc\Controllers\Client\GioHangController;
use Ductong\BaseMvc\Router;

$router = new Router();


$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/client/sanpham', SanPhamController::class, 'index');
$router->addRoute('/client/ChiTietsp', ChiTietspController::class, 'index');
$router->addRoute('/client/GioHang', GioHangController::class, 'index');

$router->addRoute('/admin/dashboard', DashboardController::class, 'index');

$router->addRoute('/login', LoginController::class, 'showForm');
$router->addRoute('/handleLogin', LoginController::class, 'handleLogin');
$router->addRoute('/logout', LogoutController::class, 'logout');


$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');

$router->addRoute('/admin/categories', CategoryController::class, 'index');
$router->addRoute('/admin/categories/create', CategoryController::class, 'create');
$router->addRoute('/admin/categories/update', CategoryController::class, 'update');
$router->addRoute('/admin/categories/delete', CategoryController::class, 'delete');

$router->addRoute('/admin/products', ProductController::class, 'index');
$router->addRoute('/admin/products/create', ProductController::class, 'create');
$router->addRoute('/admin/products/update', ProductController::class, 'update');
$router->addRoute('/admin/products/delete', ProductController::class, 'delete');

$router->addRoute('/admin/chitiethoadon', chitiethoadonController::class, 'index');
$router->addRoute('/admin/chitiethoadon/create', chitiethoadonController::class, 'create');
$router->addRoute('/admin/chitiethoadon/update', chitiethoadonController::class, 'update');
$router->addRoute('/admin/chitiethoadon/delete', chitiethoadonController::class, 'delete');

$router->addRoute('/admin/hoadon', hoadonController::class, 'index');
$router->addRoute('/admin/hoadon/create', hoadonController::class, 'create');
$router->addRoute('/admin/hoadon/update', hoadonController::class, 'update');
$router->addRoute('/admin/hoadon/delete', hoadonController::class, 'delete');

$router->addRoute('/admin/nvgh', nvghController::class, 'index');
$router->addRoute('/admin/nvgh/create', nvghController::class, 'create');
$router->addRoute('/admin/nvgh/update', nvghController::class, 'update');
$router->addRoute('/admin/nvgh/delete', nvghController::class, 'delete');
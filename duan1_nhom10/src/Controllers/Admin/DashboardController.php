<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;

class DashboardController extends Controller

{ 
    public function __construct() {
        check_auth();
    }
    public function index() {
        // Kiểm tra quyền admin trước khi hiển thị trang Dashboardd
        if (!isset($_SESSION['user']) || $_SESSION['user']['is_admin'] != 1) {
            header('Location: /login'); // Chuyển hướng đến trang đăng nhập nếu không phải admin
            exit();
        }

        $this->render('admin/dashboard');
    }
}

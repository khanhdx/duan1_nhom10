<?php

namespace Ductong\BaseMvc\Controllers\Auth;

use Ductong\BaseMvc\Controller;

class LogoutController extends Controller
{
    public function logout() {
        // Kiểm tra đăng nhập
        if (isset($_SESSION['user'])) {
            // Hủy bỏ toàn bộ phiên làm việc
            session_destroy();

            // Chuyển hướng về trang chủ
            header('Location: /');
            exit();
        } else {
            // Nếu không đăng nhập, có thể xử lý theo ý của bạn, ví dụ: chuyển hướng về trang đăng nhập
            header('Location: /auth/login');
            exit();
        }
    }
}

<?php

namespace Ductong\BaseMvc\Controllers\Auth;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

class LoginController extends Controller
{
    public function showForm() {
        $this->render('auth/login');
    }

    public function handleLogin()
    {
        $user = new User();
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $userDetails = $user->getUserByEmailPassword($email, $password);
    
        if ($userDetails) {
            // Kiểm tra xem người dùng có trong bảng admin hay khôngg
            if ($userDetails['is_admin']) {
            $_SESSION['user'] = $userDetails;
                // Người dùng là admin, chuyển hướng đến trang admin
                header('Location: /admin/dashboard');
                exit();
            } else {
                // Người dùng không phải là admin, chuyển hướng đến trang chủ
                header('Location: /');
                exit();
            }
        } else {
            $_SESSION['error'] = 'Đăng nhập không thành công. Vui lòng thử lại.';
            header('Location: /login');
            exit();
        }
    }
    
}

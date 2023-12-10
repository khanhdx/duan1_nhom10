<?php

namespace Ductong\BaseMvc\Controllers\Auth;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

class RegisterController extends Controller
{
    public function showForm()
    {
        $this->render('auth/register');
    }

    public function handleRegister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $password = $_POST['password'];

            // Kiểm tra xem email đã tồn tại hay chưa
            $userModel = new User;
            if ($userModel->emailExists($email)) {
                $error = 'Email đã tồn tại. Vui lòng chọn một email khác.';
                $this->render('auth/register', ['error' => $error]);
                exit();
            }

            // Thêm bất kỳ kiểm tra hợp lệ nào cần thiết cho dữ liệu đầu vào

            $data = [
                'name' => $username,
                'email' => $email,
                'address' => $address,
                'password' => $password,
            ];

            $userModel->insert($data);

            // Chuyển hướng đến trang đăng nhập sau khi đăng ký thành công
            header('Location: /login');
            exit();
        }

        $this->render('auth/register');
    }
}

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

// RegisterController.php
public function handleRegister()
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $name = $_POST['name'];
    // Kiểm tra xem email đã tồn tại chưa
    $userModel = new User();
    if ($userModel->getUserByEmail($email)) {
        // Email đã tồn tại
        $error = "Email đã tồn tại. Vui lòng chọn email khác.";
        $this->render('auth/register', compact('error'));
        exit(); // Đảm bảo ngăn chặn việc thực thi mã tiếp theo
    }

    // Thực hiện các kiểm tra validate cần thiết

    // Tạo mới người dùng
    $user = new User();
    $user->setEmail($email);
    $user->setPassword($password);
    $user->setname($name);
    $user->setaddress($address);


    // Log dữ liệu
    error_log('Email: ' . $email);
    error_log('Password: ' . $password);
    error_log('Name: ' . $name);
    error_log('Address: ' . $address);
    // Lưu người dùng vào cơ sở dữ liệu
    $result = $user->save();

    // Kiểm tra kết quả lưu
    if (!$result) {
        error_log('Lưu người dùng thất bại');
        // Xử lý lỗi nếu cần
    }

    // Lưu thông báo vào session
    $_SESSION['success_message'] = 'Đăng ký thành công!';

    // Chuyển hướng về trang đăng nhập
    header('Location: /auth/login');
    exit(); // Đảm bảo ngăn chặn việc thực thi mã tiếp theo
}

}

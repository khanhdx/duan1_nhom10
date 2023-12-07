<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\chitiethoadon;
use Ductong\BaseMvc\Models\hoadon;
use Ductong\BaseMvc\Models\Product;

class GioHangController extends Controller
{
    /*
        Đây là hàm hiển thị 
    */
    public function index()
    {
        $this->render('client/GioHang',);
    }
    public function addToCart()
    {
        if (!empty($_POST)) {

            $_SESSION['client/GioHang'][$_POST['id']] = [
                'price_sale' => $_POST['price_sale'],
                'soluongmua' => $_POST['soluongmua'],
            ];
        }
        
        header('Location: client/GioHang',);
    }

    public function removeFromCart()
    {
        $id = $_GET['id'] ?? '';

        if (!empty($id)) {
            unset($_SESSION['client/GioHang'][$id]);
        }

        header('Location: /client/GioHang');
    }

    public function incrementQuantity()
    {
        $id = $_GET['id'] ?? '';

        if (!empty($id) && isset($_SESSION['client/GioHang'][$id])) {
            ++$_SESSION['client/GioHang'][$id]['soluongmua'];
        }

        header('Location: /client/GioHang');
    }

    public function decrementQuantity()
    {
        $id = $_GET['id'] ?? '';

        if (!empty($id) && isset($_SESSION['client/GioHang'][$id])) {
            if ($_SESSION['client/GioHang'][$id]['soluongmua'] > 1) {
                --$_SESSION['client/GioHang'][$id]['soluongmua'];
            }
        }

        header('Location: /client/GioHang');
    }

    public function createOrder()
    {
        if (!empty($_POST)) {
            // Tạo mới Order
            $sum = 0;
            foreach ($_SESSION['client/GioHang'] as $item) {
                $sum += $item['price_sale'] * $item['soluongmua'];
            }

            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'noinhan' => $_POST['address'],
                'tonggia' => $sum,
                'tinhtrang' => STATUS_PENDING,
                'ngay_lap' => date('Y-m-d', time()),
            ];

            $orderID = (new hoadon)->insert($data);

            // Tạo Order detail
            foreach ($_SESSION['client/GioHang'] as $productID => $item) {
                $data = [
                    'id_hd' => $orderID,
                    'id_sp' => $productID,
                    'soluongmua' => $item['soluongmua'],
                    'price_sale' => $item['price_sale'],
                ];

                (new chitiethoadon)->insert($data);
            }

            $_SESSION['client/GioHang'] = [];
        }

        header('Location: /');
    }
}

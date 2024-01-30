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
                'tonggia' => $_POST['tonggia'],
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
            $soluongmua=0;
            $sum = 0;
            foreach ($_SESSION['client/GioHang'] as $item) {
                $soluongmua=$item['soluongmua'];
                $sum += $item['tonggia'] * $item['soluongmua'];
            }
            
            
            $data = [
                'id_kh'=>1,
                'id_sp'=> $_POST['id_sp'],
                'tinhtrang'=>1,
                'ngay_lap' => date('Y-m-d', time()),
                'tonggia' => $sum,
                'noinhan' => $_POST['noinhan'],
                'nvgh'=>2,
                'ghichu'=> $_POST['ghichu'],
                'name' => $_POST['name'],
                'soluongmua'=> $soluongmua,
                
            ];

            (new hoadon)->insert($data);
            $hoadons = (new hoadon) ->all();
            $orderID=0;
            foreach($hoadons as $hoadon){
                if($hoadon['id']>$orderID){
                    $orderID=$hoadon['id'];
                }
            }

            // Tạo Order detail
        
            foreach ($_SESSION['client/GioHang'] as $productID => $item) {
                $data = [
                    'id_hd' => $orderID,
                    'id_sp' => $productID,
                    'soluongmua' => $item['soluongmua'],
                    'tonggia' => $item['tonggia'],
                ];

                (new chitiethoadon)->insert($data);
            }

            $_SESSION['client/GioHang'] = [];
        }

        header('Location: /');
    }
}

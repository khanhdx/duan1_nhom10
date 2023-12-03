<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\chitiethoadon;
use Ductong\BaseMvc\Models\hoadon;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\tinhtrang;
use Ductong\BaseMvc\Models\nvgh;
use Ductong\BaseMvc\Models\Product;

class hoadonController extends Controller
{

    /* Lấy danh sách */
    public function index()
    {
        $hoadons = (new hoadon())->all();

        $use = (new User())->all();
        $arrayusersIdName = [];
        foreach ($use as $users) {
            $arrayusersIdName[$users['id']] = $users['name'];
        }

        $tinhtrang = (new tinhtrang())->all();
        $arraytinhtrangIdName = [];
        foreach ($tinhtrang as $tinhtrangs) {
            $arraytinhtrangIdName[$tinhtrangs['id']] = $tinhtrangs['tinhtrang'];
        }

        $nvgh = (new nvgh())->all();
        $arraynvghIdName = [];
        foreach ($nvgh as $nvghs) {
            $arraynvghIdName[$nvghs['id']] = $nvghs['name'];
        }

        $product = (new Product())->all();
        $arrayproductsIdName = [];
        foreach ($product as $products) {
            $arrayproductsIdName[$products['id']] = $products['name'];
        }

        $this->renderAdmin(
            "hoadon/index",
            [
                "hoadons" => $hoadons,
                "arrayusersIdName" => $arrayusersIdName,
                "arraytinhtrangIdName" => $arraytinhtrangIdName,
                "arraynvghIdName" => $arraynvghIdName,
                "arrayproductsIdName" => $arrayproductsIdName,
            ]
        );
    }

    /* Thêm mới */
    public function create()
    {
        if (isset($_POST["btn-submit"])) {
            $data = [
                'name' => $_POST['name'],
                'id_kh' => $_POST['id_kh'],
                'id_sp' => $_POST['id_sp'],
                'tinhtrang' => $_POST['tinhtrang'],
                'ngay_lap' => $_POST['ngay_lap'],
                'tonggia' => $_POST['tonggia'],
                'noinhan' => $_POST['noinhan'],
                'nvgh' => $_POST['nvgh'],
                'ghichu' => $_POST['ghichu'],
            ];

            (new hoadon())->insert($data);
            
            $newhoadon = (new hoadon())->all();
            $order = 0;
            foreach ($newhoadon as $hoadon) {
                if ($hoadon['id_kh'] == $_POST['id_kh']) {
                    if ($hoadon['id'] > $order) {
                        $order = $hoadon['id'];
                    }
                }
            }
                $nhan=$_POST['tonggia']*$_POST['soluong'];
                $data = [
                    'id_hd' => $order,
                    'id_sp' => $_POST['id_sp'],
                    'soluongmua' => $_POST['soluong'],
                    'price_sale'=>$nhan,
                ];
                (new chitiethoadon())->insert($data);

                header('Location: /admin/hoadon');
        }

            $products = (new Product())->all();
            $users = (new User())->all();
            $tinhtrangs = (new tinhtrang())->all();
            $nvghs = (new nvgh())->all();
            $hoadon = (new hoadon())->findOne($_GET["id"]);
            $this->renderAdmin("hoadon/create", ["hoadons" => $hoadon, "users" => $users, "tinhtrangs" => $tinhtrangs, "nvghs" => $nvghs, "products" => $products]);
        }
    
    /* Cập nhật */
    public function update()
    {

        if (isset($_POST["btn-submit"])) {
            $data = [
                'name' => $_POST['name'],
                'id_kh' => $_POST['id_kh'],
                'id_sp' => $_POST['id_sp'],
                'tinhtrang' => $_POST['tinhtrang'],
                'ngay_lap' => $_POST['ngay_lap'],
                'tonggia' => $_POST['tonggia'],
                'noinhan' => $_POST['noinhan'],
                'nvgh' => $_POST['nvgh'],
                'ghichu' => $_POST['ghichu'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new hoadon())->update($data, $conditions);
        }


        $products = (new Product())->all();
        $users = (new User())->all();
        $tinhtrangs = (new tinhtrang())->all();
        $nvghs = (new nvgh())->all();
        $hoadons = (new hoadon())->findOne($_GET["id"]);

        $this->renderAdmin("hoadon/update", ["hoadons" => $hoadons, "users" => $users, "tinhtrangs" => $tinhtrangs, "nvghs" => $nvghs, "products" => $products]);
    }

    /* Xóa */
    public function delete()
    {
        $conditions = [
            ['id_hd', '=', $_GET['id']],
        ];
        (new chitiethoadon())->delete($conditions);

        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new hoadon())->delete($conditions);

        

        header('Location: /admin/hoadon');
    }
}

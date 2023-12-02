<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\chitiethoadon;
use Ductong\BaseMvc\Models\hoadon;
use Ductong\BaseMvc\Models\Product;

class chitiethoadonController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $chitiethoadons = (new chitiethoadon())->all();
        

        $arraychitiethoadonsIdName = [];
        foreach ($chitiethoadons as $chitiethoadon) {
            $arraychitiethoadonsIdName[$chitiethoadon['id']] = $chitiethoadon['name'];
        }
        $this->renderAdmin("chitiethoadon/index",
        [
            "chitiethoadons" => $chitiethoadons,
            "arraychitiethoadonsIdName" => $arraychitiethoadonsIdName
        ]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name' => $_POST['name'],          
                'id_hd' => $_POST['id_hd'],          
                'id_sp' => $_POST['id_sp'],            
                'soluongmua' => $_POST['soluongmua'],
                'dongia' => $_POST['dongia'],
            ];

            (new chitiethoadon())->insert($data);

            header('Location: /admin/chitiethoadon');
        }

        $this->renderAdmin("chitiethoadon/create");
    }

    /* Cập nhật */
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [
                           
                'id_hd' => $_POST['id_hd'],          
                'id_sp' => $_POST['id_sp'],            
                'soluongmua' => $_POST['soluongmua'],
                'dongia' => $_POST['dongia'],
                'name' => $_POST['name'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new chitiethoadon())->update($data, $conditions);
        }

        $chitiethoadon = (new chitiethoadon())->findOne($_GET["id"]);

        $this->renderAdmin("chitiethoadon/update", ["chitiethoadon" => $chitiethoadon]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new chitiethoadon())->delete($conditions);

        header('Location: /admin/chitiethoadon');
    }
}
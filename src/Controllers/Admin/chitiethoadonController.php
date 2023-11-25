<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\chitiethoadon;

class chitiethoadonController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $chitiethoadon = (new chitiethoadon())->all();

        $this->renderAdmin("chitiethoadon/index", ["chitiethoadon" => $chitiethoadon]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'id' => $_POST['id'],           
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
                'soluongmua' => $_POST['soluongmua'],
            ];

            $data = [
                'dongia' => $_POST['dongia'],
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
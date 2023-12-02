<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\nvgh;

class nvghController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $nvgh = (new nvgh())->all();

        $this->renderAdmin("nvgh/index", ["nvghs" => $nvgh]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name' => $_POST['name'],
                'sdt_1' => $_POST['sdt_1'],
                'sdt_2' => $_POST['sdt_2'],
            ];

            (new nvgh())->insert($data);

            header('Location: /admin/nvgh');
        }

        $this->renderAdmin("nvgh/create");
    }

    /* Cập nhật */
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name' => $_POST['name'],
                'sdt_1' => $_POST['sdt_1'],
                'sdt_2' => $_POST['sdt_2'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new nvgh())->update($data, $conditions);
        }

        $nvghs = (new nvgh())->findOne($_GET["id"]);

        $this->renderAdmin("nvgh/update", ["nvghs" => $nvghs]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new nvgh())->delete($conditions);

        header('Location: /admin/nvgh');
    }
}
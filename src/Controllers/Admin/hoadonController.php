<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\hoadon;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\tinhtrang;
use Ductong\BaseMvc\Models\nvgh;

class hoadonController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $hoadons = (new Hoadon())->all();
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


        $this->renderAdmin("hoadon/index",
        [
            "hoadons" => $hoadons,
            "arrayusersIdName" => $arrayusersIdName,
            "arraytinhtrangIdName" => $arraytinhtrangIdName,
            "arraynvghIdName" => $arraynvghIdName,
        ]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name' => $_POST['name'],
                'id_kh' => $_POST['id_kh'],
                'tinhtrang' => $_POST['tinhtrang'],
                'ngay_lap' => $_POST['ngay_lap'],
                'tonggia' => $_POST['tonggia'],
                'noinhan' => $_POST['noinhan'],
                'nvgh' => $_POST['nvgh'],
                'ghichu' => $_POST['ghichu'],
            ];

            (new Hoadon())->insert($data);

            header('Location: /admin/hoadon');
        }

        $users = (new User())->all();
        $tinhtrangs = (new tinhtrang())->all();
        $nvghs = (new nvgh())->all();
        $hoadon = (new hoadon())->findOne($_GET["id"]);
        $this->renderAdmin("hoadon/create",["hoadons" => $hoadon, "users" => $users, "tinhtrangs" => $tinhtrangs, "nvghs" => $nvghs] );
    }

    /* Cập nhật */
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [      
                'name' => $_POST['name'],      
                'id_kh' => $_POST['id_kh'],
                'tinhtrang' => "đang vận chuyển",
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

        $users = (new User())->all();
        $tinhtrangs = (new tinhtrang())->all();
        $nvghs = (new nvgh())->all();
        $hoadons = (new hoadon())->findOne($_GET["id"]);

        $this->renderAdmin("hoadon/update", ["hoadons" => $hoadons, "users" => $users, "tinhtrangs" => $tinhtrangs, "nvghs" => $nvghs ]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new hoadon())->delete($conditions);

        header('Location: /admin/hoadon');
    }
}
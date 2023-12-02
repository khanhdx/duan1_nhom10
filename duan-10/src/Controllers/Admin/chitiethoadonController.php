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
        

        $hoadons = (new hoadon())->all();
        $arrayhoadonsIdName = [];
        foreach ($hoadons as $hoadon) {
            $arrayhoadonsIdName[$hoadon['id']] = $hoadon['name'];
        }

        $sanphams = (new Product())->all();
        $arraysanphamsIdName = [];
        foreach ($sanphams as $sanpham) {
            $arraysanphamsIdName[$sanpham['id']] = $sanpham['name'];
        }

        $this->renderAdmin("chitiethoadon/index",
        [
            "chitiethoadons" => $chitiethoadons,
            "arrayhoadonsIdName" => $arrayhoadonsIdName,
            "arraysanphamsIdName" => $arraysanphamsIdName,
        ]);
    }
}
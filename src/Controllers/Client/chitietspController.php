<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class ChiTietspController extends Controller
{
    /*
        Đây là hàm hiển thị 
    */
    public function index() {
        $this->render('client/ChiTietsp');
    }
}
<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị 
    */
    public function index() {
        $products = (new Product())->all();

        $this->render('client/point', ["products" => $products ]);
    }
}

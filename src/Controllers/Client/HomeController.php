<?php

namespace Ductong\BaseMvc\Controllers\Client;
use Ductong\BaseMvc\Models\Product;

use Ductong\BaseMvc\Controller;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị 
    */
    public function index() {
        $products = (new Product())->all();

        $this->render('client/point', ['products'=> $products]);
    }
}

<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\Product;

class CommentController extends Controller {

    public function index() {
        $comments = (new Comment())->all();
        $this->renderAdmin("comments/index", ["comments" => $comments]);
    }

    public function create() {
        if (isset($_POST["btn-submit-comment"])) {
            if (isset($_POST['product_id'], $_POST['user_id'], $_POST['content'], $_POST['desc'])) {
                $data = [
                    'user_id' => $_POST['user_id'],
                    'product_id' => $_POST['product_id'],
                    'content' => $_POST['content'],
                    'date_comment' => $_POST['date_comment'], // Thêm trường nàyy
                ];

                (new Comment())->insert($data);

                header('Location: /admin/comments');
            } else {
                echo "Vui lòng điền đầy đủ thông tin.";
            }
        }

        $products = (new Product())->all();
        $this->renderAdmin("comments/create", ["products" => $products]);


    }


    public function update() {
        if (isset($_POST["btn-submit-comment"])) {
            $data = [
                'product_id' => $_POST['product_id'],
                'user_name' => $_POST['user_name'],
                'content' => $_POST['content'],
                // Cập nhật các trường bình luận khác nếu cần
            ];

            $conditions = [
                ['id', '=', $_GET['comment_id']],
            ];

            (new Comment())->update($data, $conditions);
        }

        $comment = (new Comment())->findOne($_GET["comment_id"]);
        $products = (new Product())->all();

        $this->renderAdmin("comments/update", ["comment" => $comment, "products" => $products]);
    }

    public function delete() {
        $conditions = [
            ['id', '=', $_GET['comment_id']],
        ];

        (new Comment())->delete($conditions);

        // Chuyển hướng về trang sản phẩm hoặc trang quản lý bình luận
        header('Location: /admin/comments');
    }
}

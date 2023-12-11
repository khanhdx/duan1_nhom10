<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;

class CommentController extends Controller
{
    private $commentModel;

    public function __construct()
    {
        $this->commentModel = new Comment();
    }

    public function index()
    {
        // Lấy danh sách comment
        $comments = $this->commentModel->getAllComments();

        // Hiển thị danh sách comment
        return $this->renderAdmin('comments/index', ['comments' => $comments]);
    }
    // Thêm vào CommentController.php
    public function reply()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Kiểm tra xem các giá trị cần thiết có tồn tại không
            if (isset($_POST['reply_text'], $_POST['user_id'], $_POST['product_id'])) {
                $replyText = $_POST['reply_text'];
                $userId = $_POST['user_id'];
                $productId = $_POST['product_id'];
                $dateComment = date('Y-m-d'); // Lấy ngày hiện tại

                // Thực hiện thêm mới comment trả lời
                $this->commentModel->addComment($replyText, $userId, $productId, $dateComment);

                // Chuyển hướng về trang sản phẩm sau khi thêm reply
                return $this->redirect('/product?id=' . $productId);
            } else {
                // Báo lỗi hoặc thực hiện các hành động khác nếu các giá trị không tồn tại
                return $this->renderAdmin('error', ['message' => 'Missing required parameters for reply']);
            }
        } else {
            // Báo lỗi hoặc thực hiện các hành động khác nếu không phải là phương thức POST
            return $this->renderAdmin('error', ['message' => 'Invalid request method']);
        }
    }
    
}

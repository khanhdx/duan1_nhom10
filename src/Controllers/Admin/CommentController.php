<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;

class CommentController extends Controller
{
    /*
    * Hiển thị danh sách các bình luận
    */
    public function index()
    {
        // Lấy tất cả các bình luận từ model Comment
        $comments = (new Comment)->all();

        // Hiển thị view 'admin/comments/index' với dữ liệu bình luận
        $this->render('admin/comments/index', ['comments' => $comments]);
    }

    /*
    * Hiển thị form để thêm mới bình luận
    */
    public function create()
    {
        // Hiển thị view 'admin/comments/create' cho phép người dùng nhập bình luận mới
        $this->render('admin/comments/create');
    }

    /*
    * Xử lý việc thêm mới bình luận từ form
    */
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $commentText = $_POST['comment_text'];
            $name = $_POST['name'];
            $productId = $_POST['product_id'];
            $dateComment = $_POST['date_comment'];

            // Thêm mới bình luận vào database
            $data = [
                'comment_text' => $commentText,
                'name' => $name,
                'product_id' => $productId,
                'date_comment' => $dateComment,
            ];

            (new Comment)->insert($data);

            // Hiển thị thông báo hoặc chuyển hướng người dùng tùy thuộc vào yêu cầu của bạn
            // Ví dụ: Hiển thị thông báo thành công và chuyển hướng về trang danh sách bình luận
            $successMessage = 'Bình luận đã được thêm thành công!';
            $this->render('admin/comments/success', ['message' => $successMessage]);
            exit();
        }
    }

    /*
    * Xử lý việc xóa bình luận
    */
    public function destroy($id)
    {
        // Xóa bình luận khỏi database
        $conditions = [
            ['id', '=', $id],
        ];

        (new Comment)->delete($conditions);

        // Hiển thị thông báo hoặc chuyển hướng người dùng tùy thuộc vào yêu cầu của bạn
        // Ví dụ: Hiển thị thông báo thành công và chuyển hướng về trang danh sách bình luận
        $successMessage = 'Bình luận đã được xóa thành công!';
        $this->render('admin/comments/success', ['message' => $successMessage]);
        exit();
    }
}

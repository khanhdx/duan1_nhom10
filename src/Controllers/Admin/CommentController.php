<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;

class CommentController extends Controller
{
    // ...
    public function index()
    {
        $commentModel = new Comment();
        $comments = $commentModel->getAllComments();

        $this->render('admin/comments/index', ['comments' => $comments]);
    }
    // Xử lý xóa comment
    public function destroy($id)
    {
        try {
            // Kiểm tra quyền truy cập và xác nhận tồn tại comment
            $commentModel = new Comment();
            $comment = $commentModel->getCommentById($id);
    
            if (!$comment) {
                $_SESSION['error_message'] = 'Comment not found';
                header('Location: /admin/comments');
                exit();
            }
    
            // Xóa comment từ cơ sở dữ liệu
            $commentModel->deleteComment($id);
    
            // Chuyển hướng và hiển thị thông báo thành công
            $_SESSION['success_message'] = 'Comment deleted successfully';
            header('Location: /admin/comments');
            exit();
        } catch (\Exception $e) {
            // Xử lý lỗi và hiển thị thông báo lỗi
            $_SESSION['error_message'] = 'An error occurred while deleting comment';
            header('Location: /admin/comments');
            exit();
        }
    }
    
}

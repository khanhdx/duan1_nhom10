<?php
namespace Ductong\Controllers;

class CommentController {
    public function showComments() {
        // Xử lý hiển thị danh sách bình luận
        echo "Displaying Comments!";
    }

    public function addComment() {
        // Xử lý thêm bình luận
        echo "Adding a new comment!";
    }

    public function deleteComment($id) {
        // Xử lý xóa bình luận với $id là id của bình luận cần xóa
        echo "Deleting comment with ID: " . $id;
    }
}

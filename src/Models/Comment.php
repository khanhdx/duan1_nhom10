<?php
// src/Models/Comment.php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $columns = [
        'id',
        'comment_text',
        'user_id',
        'product_id',
        'date_comment',
    ];
    public function getCommentById($id)
    {
        return $this->all($id);
    }
    // Hàm để lấy tất cả các comment từ cơ sở dữ liệu
    public function getAllComments()
    {
        return $this->all();
    }
    // Hàm để thêm một comment mới
    public function addComment($data)
    {
        return $this->insert($data);
    }

    // Hàm để cập nhật thông tin một comment
    public function updateComment($id, $data)
    {
        return $this->update($data, [['id', '=', $id]]);
    }

    // Hàm để xóa một comment
    public function deleteComment($id)
    {
        return $this->delete([['id', '=', $id]]);
    }
}

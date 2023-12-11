<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Comment extends Model 
{
    protected $table = 'comments';

    protected $columns = ['id', 'comment_text', 'user_id', 'product_id', 'date_comment'];

    public function getAllComments()
    {
        // Lấy tất cả các comment, sắp xếp theo ngày comment giảm dần
        return $this->all();
    }

    public function findCommentById($commentId)
    {
        return $this->findOne($commentId);
    }
    public function addComment($commentText, $userId, $productId, $dateComment)
    {
        $data = [
            'comment_text' => $commentText,
            'user_id' => $userId,
            'product_id' => $productId,
            'date_comment' => $dateComment,
        ];

        $this->insert($data);
    }
}

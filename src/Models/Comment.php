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
}

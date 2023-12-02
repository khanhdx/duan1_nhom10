<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Comment extends Model {

    protected $table = 'comments'; // Đặt tên bảng đún

    // Các trường trong bảng comments
    protected $fillable = ['product_id', 'user_id', 'content', 'desc', 'date_comment']; // Chắc chắn đặt tên cột đúng

    // Các logic xử lý hoặc xác định mối quan hệ sẽ điều này
}

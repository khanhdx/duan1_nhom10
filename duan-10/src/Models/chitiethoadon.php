<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class chitiethoadon extends Model {
    protected $table = 'chitiethoadon';
    protected $columns = [
        
        'id_hd',
        'id_sp',
        'soluongmua',
        'price_sale',
    ];
}
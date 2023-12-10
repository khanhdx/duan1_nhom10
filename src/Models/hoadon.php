<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class hoadon extends Model {
    protected $table = 'hoadon';
    protected $columns = [
        
        'id_kh',
        'id_sp',
        'tinhtrang',
        'ngay_lap',
        'tonggia',
        'noinhan',
        'nvgh',
        'ghichu',
        'name',
        'soluongmua',
    ];
}